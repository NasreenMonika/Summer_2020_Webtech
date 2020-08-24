function nameValidation()
{
	var name=document.getElementById('name').value;
	if(!name=="")
	{
		if((name[0]>='A' && name[0]<='Z') ||(name[0]>='a' && name[0]<='z'))
		{
			if(name.split(" ").length>=2)
			{
				var counter=0;
				while(counter<name.length)
				{
					if(!((name[counter]>='A' && name[counter]<='Z') ||(name[counter]>='a' && name[counter]<='z') || name[counter]=='.' || name[counter]=='-' || userName[counter]==' '))
					{
						document.getElementById('namemsg').innerHTML="This field can contain A-Z or a-z or . or -";
						return false;
					}
					counter=counter+1;
				}
				return true;
			}
			else
			{
				document.getElementById('namemsg').innerHTML="Please enter both your first and last name ";
				return false;
			}
		}
		else
		{
			document.getElementById('namemsg').innerHTML="Name should be start with a letter";
			return false;
		}
	}
	else
	{
		document.getElementById('namemsg').innerHTML="Please enter your name";
		return false;
	}
	return false;
}
function remover()
{
	var name =document.getElementById('name').value;
	if(!name="")
	{
		document.getElementById('namemsg').innerHTML="";
	}
}