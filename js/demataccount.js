function Validation()
{
	if(document.getElementById("txtName").Value=="" ||document.getElementById("txtEmail").value =="" ||document.getElementById("txtPhone").value =="")
	{
		alert("field must not be empty");
		return false;
	}
	
	   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      
	    if(!reg.test(document.getElementById("txtEmail").value))
	    {
	    	alert("Invalid Format of Email address");
	    	return false;
	    }
	    
	    var numbers = /^[0-9]+$/;
	    if(!document.getElementById("txtPhone").value.match(numbers))
	    {
	    	alert("Mobile No must be numeric");
	        return false;
	    }
	    if(document.getElementById("idCity").value=="Please Select City")
	    {
	    	alert("Please Select City");
	    	return false;
	    }
  
	    return true;

}