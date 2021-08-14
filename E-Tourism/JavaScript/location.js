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