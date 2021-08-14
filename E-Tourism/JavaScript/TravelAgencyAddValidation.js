var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validateaddTravelAgency(){
				refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML= "*Travel agency name please!";
				}
				else if(get("name").value.length <= 2) {
					hasError = true;
					get("err_name").innerHTML= "*Travel agency name must have more than 2 letters !";
				}
				if(get("username").value == ""){
					hasError = true;
					get("err_username").innerHTML= "*Travel agency username name please!";
				}
				else if(get("username").value.length <= 6) {
					hasError = true;
					get("err_username").innerHTML= "*Travel agency username must have more than 6 letters !";
				}
				if(get("password").value == ""){
					hasError = true;
					get("err_password").innerHTML= "*Travel agency password required!";
				}
				else if(get("password").value.length <= 9) {
					hasError = true;
					get("err_password").innerHTML= "*Travel agency password must have more than 9 characters !";
				}
				if(get("confirmpassword").value != get("password").value){
					hasError = true;
					get("err_confirmpassword").innerHTML= "*Password didn't match with upperone!";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML= "*Travel agency email please!";
				}
				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML= "*Travel agency phone number please!";
				}
				else if(get("phone").value.length < 11) {
					hasError = true;
					get("err_phone").innerHTML= "*Number must have more than 11 numbers!";
				}
				if(get("etinum").value == ""){
					hasError = true;
					get("err_etinum").innerHTML= "*Travel agency ETIN number please!";
				}
				else if(get("etinum").value.length < 6) {
					hasError = true;
					get("err_etinum").innerHTML= "*Travel agency ETIN Number must have more than 6 numbers!";
				}

				return !hasError;
			}

			function refresh(){
				hasError=false;
				get("err_name").innerHTML= "";
				get("err_username").innerHTML= "";
				get("err_password").innerHTML= "";
				get("err_confirmpassword").innerHTML= "";
				get("err_email").innerHTML= "";
				get("err_phone").innerHTML= "";
				get("err_etinum").innerHTML= "";
			}