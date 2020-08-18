<?php 
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if(isset($_POST['edit'])){

		$id 	= $_POST['id'];
		$company_name 	= $_POST['company_name'];
		$profile_description 	= $_POST['profile_description'];
		$industry 		= $_POST['industry'];
		$company_website 	= $_POST['company_website'];
		$company_logo		= $id.".png";
		if(empty($id) || empty($company_name) || empty($profile_description)||empty($industry) || empty($company_website)){
			header('location: ../views/editCompany.php?id={$id}');
		}
		else{

			$company = [
				'id'=> $id,
				'company_name'=> $company_name,
				'profile_description'=> $profile_description,
				'industry'=> $industry,
				'company_website'=> $company_website,
				'company_logo'=> $company_logo
			];

			$status = updateCompany($company);

			if($status){
				header('location: ../views/all_company.php?success=done');
			}else{
				header('location: ../views/editCompany.php?id={$id}');
			}
		}
	}

?>