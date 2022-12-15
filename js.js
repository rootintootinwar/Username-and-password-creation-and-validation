function vfun(){
	var uname=document.forms["myform"]["uname"].value;
	var upswd=document.forms["myform"]["upswd"].value;
	
	if(uname == null || uname ==""){
		document.getElementById("errorBox").innerHTML = "enter the UserName";
		return false;
	}

	if(upswd == null || upswd ==""){
		document.getElementById("errorBox").innerHTML = "enter the Password";
		return false;
	}

}

function vfun1(){
	var upswd1=document.forms["myform2"]["upswd1"].value;
	var upswd2=document.forms["myform2"]["upswd2"].value;

	if(upswd1!=upswd2){
		document.getElementById("errorBox").innerHTML = "Password did'nt Match";
		return false;
	}


}