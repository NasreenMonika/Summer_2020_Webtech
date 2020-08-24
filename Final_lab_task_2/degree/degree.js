function degreeValidation() {
	var ssc= document.getElementById('ssc');
	var hsc= document.getElementById('hsc');
	var bsc= document.getElementById('bsc')
	if(ssc.checked || hsc.checked || bsc.checked)
	{
		return true;
	}
	else
	{
		document.getElementById('degreemgs').innerHTML="Please choose at least one degree";
		return false;
	}
}