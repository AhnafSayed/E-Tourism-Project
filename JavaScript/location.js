var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				refresh();
				if(get("location").value == ""){
					hasError = true;
					get("err_location").innerHTML= "*Location name please!";
				}
				if(get("information").value == ""){
					hasError = true;
					get("err_information").innerHTML= "*Information name please!";
				}
				
				return !hasError;
			}

			function refresh(){
				hasError=false;
				get("err_location").innerHTML= "";
				get("err_information").innerHTML= "";
			}

			function searchLocation(e){
	if(e.value == ""){
		get("Search").innerHTML = "";
		return;
	}
	var xhr = new XMLHttpRequest();
	xhr.open("GET","SearchLocation.php?locationkey="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			get("Search").innerHTML = this.responseText;
		}
	};
	xhr.send();
}