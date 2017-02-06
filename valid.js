function validate()
{
	var a=document.vlForm.stdname.value;
	if(a=="")
	{
		alert("please fill");
		document.vlForm.stdname.focus();
		return false;
	}
	if(!isNaN(a))
	{
		alert("please enter characters only");
		document.vlForm.stdname.select();
		return false;
	}
	var c=document.vlForm.mbno.value;
	{
		if(isNaN(c))
		{
			alert("Id must be in numbers only");
			document.vlForm.mbno.select();
			return false;
		}
		
	}
