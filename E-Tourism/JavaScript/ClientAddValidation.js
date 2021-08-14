var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validateaddClient(){
				refresh();
				if(get("username").value == ""){
					hasError = true;
					get("err_username").innerHTML= "*Client's username please!";
				}
				else if(get("username").value.length <= 6) {
					hasError = true;
					get("err_username").innerHTML= "*Client's username must have more than 6 letters !";
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
					get("err_name").innerHTML= "*Client name please!";
				}
				else if(get("name").value.length <= 2) {
					hasError = true;
					get("err_name").innerHTML= "*Client name must have more than 2 letters !";
				}
				if(!get("male").checked && !get("female").checked){
					hasError=true;
					get("err_gender").innerHTML= "*Select client gender!";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML= "*Client email please!";
				}
				if(get("city").selectedIndex == 0){
					hasError=true;
					get("err_city").innerHTML = "*Select client's city!";
				}
				if(get("state").value == ""){
					hasError = true;
					get("err_state").innerHTML= "*Client's state name please!";
				}
				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML= "*Client phone number required!";
				}
				else if(get("phone").value.length < 11) {
					hasError = true;
					get("err_phone").innerHTML= "*Client phone number must have more than 11 numbers!";
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