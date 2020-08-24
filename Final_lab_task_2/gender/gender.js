function genderValidation()
{
	var gender=document.genderForm.gender;
	for(var i=0;i<gender.length;i++)
	{
		if(gender[i].checked)
		{
			return true;
		}
	}
		document.getElementById('gendermgs').innerHTML="This field cannot be empty";
		return false;
}