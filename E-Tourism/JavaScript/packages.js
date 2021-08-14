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