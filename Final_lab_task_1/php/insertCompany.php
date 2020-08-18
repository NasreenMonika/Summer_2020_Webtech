<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['insert'])){

		$id 	= $_POST['id'];
		$company_name 	= $_POST['company_name'];
		$profile_description 	= $_POST['profile_description'];
		$industry 	= $_POST['industry'];
		$company_website 	= $_POST['company_website'];
		$company_logo		= $id.".png";
		$user_account_id=$_SESSION['id'];

		if(empty($id) || empty($company_name) || empty($profile_description)||empty($industry)||empty($company_website)||empty($_FILES['company_logo'])){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'id'=> $id,
			'company_name'=> $company_name,
			'profile_description'=> $profile_description,
			'industry'=> $industry,
			'company_website'=> $company_website,
			'company_logo'=> $company_logo,
			'user_account_id'=> $user_account_id
			];

			$status = insertCompany($user);

			if($status){
				if(move_uploaded_file($_FILES['company_logo']['tmp_name'], $company_logo))
				{
					echo "Done";
				}
				header('location: ../views/all_company.php?success=registration_done');
			}else{
				header('location: ../views/companyCreate.php?error=db_error');
			}
		}
	}



?>