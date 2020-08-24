function dobValidation()
{
	var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	if((day!="") && (month!="") && (year!=""))
	{
		if((parseInt(day,10)>=1 && parseInt(day,10)<=31) && (parseInt(month,10)>=1 && parseInt(month,10)<=12) && (parseInt(year,10)>=1900 && parseInt(year,10)<=2016))
		{
			return true;
		}
		else
		{
			document.getElementById('dobmgs').innerHTML="Enter a valid date";
			return false;
		}
	}
	else
	{
		document.getElementById('dobmgs').innerHTML="Field cannot be empty";
		return false;
	}
}
function remover()
{
	var day=document.getElementById('day').value;
	var month =document.getElementById('month').value;
	var year =document.getElementById('year').value;
	if(day!="")
	{
		document.getElementById('dobmgs').innerHTML="";
	}
	if(month!="")
	{
		document.getElementById('dobmgs').innerHTML="";
	}
	if(year!="")
	{
		document.getElementById('dobmgs').innerHTML="";
	}
}
