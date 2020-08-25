function InformationValidation()
{
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var gender=document.form.gender;
	var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	var bg=document.getElementById('bloodgroup').value;
	var ssc= document.getElementById('ssc');
	var hsc= document.getElementById('hsc');
	var bsc= document.getElementById('bsc') ;
	var msc= document.getElementById('msc') ;
	var picture=document.getElementById('picture').value;
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
						nameval=false;
					}
					counter=counter+1;
				}
				nameval=true;
			}
			else
			{
				document.getElementById('namemgs').innerHTML="Please enter both your first and last name ";
				nameval=false;
			}
		}
		else
		{
			document.getElementById('namemgs').innerHTML="Name should be start with a letter";
			nameval=false;
		}
	}
	else
	{
		document.getElementById('namemgs').innerHTML="Please enter your name";
		nameval=false;
	}
	var emailval=false;
	if(!(email==""))
	{
		emailval=true;

	}
	else 
	{
		document.getElementById('emailmgs').innerHTML="Please enter a valid email";
		emailval=false;
	}
    var genderval=false;
    document.getElementById('gendermgs').innerHTML="This field cannot be empty";
	for(var i=0;i<gender.length;i++)
	{
		if(gender[i].checked)
		{
			genderval= true;
			document.getElementById('gendermgs').innerHTML="";
		}
	}
	var dobval=false;
	if((day!="") && (month!="") && (year!=""))
	{
		if((parseInt(day,10)>=1 && parseInt(day,10)<=31) && (parseInt(month,10)>=1 && parseInt(month,10)<=12) && (parseInt(year,10)>=1900 && parseInt(year,10)<=2016))
		{
			dobval= true;
		}
		else
		{
			document.getElementById('dobmgs').innerHTML="Enter a valid date";
			dobval= false;
		}
	}
	else
	{
		document.getElementById('dobmgs').innerHTML="Field cannot be empty";
		dobval= false;
	}
	var bgval=false;
	if(!(bg==""))
	{
		bgval= true;
	} 
	else
	{
		document.getElementById('bgmgs').innerHTML="please select your blood group";
		bgval= false;
	}
  var degreeval=false;
	if(ssc.checked || hsc.checked || bsc.checked || msc.checked)
	{
		degreeval= true;
	}
	else
	{
		document.getElementById('degreemgs').innerHTML="Please choose at least one degree";
		degreeval= false;
	}

	 var pictureval=false;
	if(!(picture==""))
	{
		pictureval= true;

	}
	else(picture=="")
	{
    document.getElementById('picturemgs').innerHTML="Please select a picture";
	pictureval= false;
	}

	if(nameval && emailval && genderval && dobval && bgval && degreeval && pictureval )
	{
		return true;
	}
	else
	{
		return false;
	}


}