function get(id){
	return document.getElementById(id);
}
function checkEmail(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","Check_Email.php?email="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			if(this.responseText.trim() == "invalid"){
				get("err_email").innerHTML = "Email exists!";
			}
			else{
				get("err_email").innerHTML ="";
			}
		}
	};
	xhr.send();
}