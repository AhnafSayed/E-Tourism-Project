var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				refresh();
				if(get("transport").value == ""){
					hasError = true;
					get("err_transport").innerHTML= "*Transport please!";
				}
				if(get("meal").value == ""){
					hasError = true;
					get("err_meal").innerHTML= "*Meal please!";
				}
				if(get("price").value == ""){
					hasError = true;
					get("err_price").innerHTML= "*Price please!";
				}
				if(get("location").value == ""){
					hasError = true;
					get("err_location").innerHTML= "*Location name please!";
				}
				if(get("hotel").value == ""){
					hasError = true;
					get("err_hotel").innerHTML= "*Hotel please!";
				}
				if(get("room").value == ""){
					hasError = true;
					get("err_room").innerHTML= "*Room please!";
				}

				
				return !hasError;
			}

			function refresh(){
				hasError=false;
				get("err_transport").innerHTML= "";
				get("err_meal").innerHTML= "";
				get("err_transport").innerHTML= "";
				get("err_transport").innerHTML= "";
				get("err_transport").innerHTML= "";
				get("err_transport").innerHTML= "";
			}


			function searchPackages(e){
	if(e.value == ""){
		get("Search").innerHTML = "";
		return;
	}
	var xhr = new XMLHttpRequest();
	xhr.open("GET","searchPackage.php?packagekey="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			get("Search").innerHTML = this.responseText;
		}
	};
	xhr.send();
}