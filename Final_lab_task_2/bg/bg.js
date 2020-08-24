function bgvalidation()
{
	var bg=document.getElementById('bloodgroup').value;
	if(!(bg==""))
	{
		return true;
	} 
	else
	{
		document.getElementById('bgmgs').innerHTML="please select your blood group";
		return false;
	}
}