function get(id){
	return document.getElementById(id);
}
function checkETINTravelAgency(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","Check_ETIN_TravelAgency.php?etin="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			if(this.responseText.trim() == "invalid"){
				get("err_etin").innerHTML = "This ETIN number already exists!";
			}
			else{
				get("err_etin").innerHTML ="";
			}
		}
	};
	xhr.send();
}