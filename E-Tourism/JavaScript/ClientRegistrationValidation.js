var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validateClient(){
				refresh();
				if(get("username").value == ""){
					hasError = true;
					get("err_username").innerHTML= "*Username please!";
				}
				else if(get("username").value.length <= 6) {
					hasError = true;
					get("err_username").innerHTML= "*Username must have more than 6 letters !";
				}
				if(get("password").value == ""){
					hasError = true;
					get("err_password").innerHTML= "*Password required!";
				}
				else if(get("password").value.length <= 9) {
					hasError = true;
					get("err_password").innerHTML= "*Password must have more than 9 characters !";
				}
				if(get("confirmpassword").value != get("password").value){
					hasError = true;
					get("err_confirmpassword").innerHTML= "*Password didn't match with upperone!";
				}
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML= "*Name please!";
				}
				else if(get("name").value.length <= 2) {
					hasError = true;
					get("err_name").innerHTML= "*Name must have more than 2 letters !";
				}
				if(!get("male").checked && !get("female").checked){
					hasError=true;
					get("err_gender").innerHTML= "*Gender required!";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML= "*Email please!";
				}
				if(get("city").selectedIndex == 0){
					hasError=true;
					get("err_city").innerHTML = "*Select your city!";
				}
				if(get("state").value == ""){
					hasError = true;
					get("err_state").innerHTML= "*Your state name please!";
				}
				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML= "*Phone number please!";
				}
				else if(get("phone").value.length < 11) {
					hasError = true;
					get("err_phone").innerHTML= "*Number must have more than 11 numbers!";
				}

				return !hasError;
			}

			function refresh(){
				hasError=false;
				get("err_username").innerHTML= "";
				get("err_password").innerHTML= "";
				get("err_confirmpassword").innerHTML= "";
				get("err_name").innerHTML= "";
				get("err_gender").innerHTML= "";
				get("err_email").innerHTML= "";
				get("err_city").innerHTML= "";
				get("err_state").innerHTML= "";
				get("err_phone").innerHTML= "";
			}