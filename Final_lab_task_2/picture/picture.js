function pictureValidation()
{
	var uid=document.getElementById('uid').value;
	var picture=document.getElementById('picture').value;
	if(uid=="")
	{
		document.getElementById('usermgs').innerHTML="Please enter a user Id";
		return false;

	}
	if(picture=="")
	{
		document.getElementById('picturemgs').innerHTML="Please select a picture";
		return false;

	}
	if((parseInt(uid,10)<=0))
	{
		document.getElementById('usermgs').innerHTML="Please enter a valid number";
		return false;
	}

	return true;

}
function remover()
{
	var uid =document.getElementById('uid').value;
	if(!(uid==""))
	{
		document.getElementById('usermgs').innerHTML="";
	}
}