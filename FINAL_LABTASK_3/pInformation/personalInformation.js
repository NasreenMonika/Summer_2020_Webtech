function InformationValidation()
{
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var nameval=false;
	if(!(name==""))
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
						document.getElementById('namemgs').innerHTML="This field can contain A-Z or a-z or . or -";
						return false;
						nameval=false;
					}
					counter=counter+1;
				}
				return true;
				nameval=true;
			}
			else
			{
				document.getElementById('namemgs').innerHTML="Please enter both your first and last name ";
				return false;
				nameval=false;
			}
		}
		else
		{
			document.getElementById('namemgs').innerHTML="Name should be start with a letter";
			return false;
			nameval=false;
		}
	}
	else
	{
		document.getElementById('namemgs').innerHTML="Please enter your name";
		return false;
		nameval=false;
	}
	var emailval=false;
	if(!(email==""))
	{
		emailval=true;
		return true;

	}
	else 
	{
		document.getElementById('emailmgs').innerHTML="Please enter a valid email";
		emailval=false;
		return false;
	}
	if(nameval && emailval)
	{
		return true;
	}
	else
	{
		return false;
	}

}