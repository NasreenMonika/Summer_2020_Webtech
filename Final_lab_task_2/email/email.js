function emailValidation()
{
	var email=document.getElementById('email').value;
	if(email=="")
	{
		document.getElementById('emailmgs').innerHTML="Please enter a valid email";
		return false;

	}

	return false;

}
function remover()
{
	var email =document.getElementById('email').value;
	if(!email="")
	{
		document.getElementById('emailmgs').innerHTML="";
	}
}