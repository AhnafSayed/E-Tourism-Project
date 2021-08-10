function get(id){
	return document.getElementById(id);
}
function checkPhoneClient(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","Check_Phone_Client.php?phone="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			if(this.responseText.trim() == "invalid"){
				get("err_phone").innerHTML = "Phone number exists! Use another phone number!";
			}
			else{
				get("err_phone").innerHTML ="";
			}
		}
	};
	xhr.send();
}