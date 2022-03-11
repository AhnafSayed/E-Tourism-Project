var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML= "*Agency name please!";
				}
				else if(get("name").value.length <= 2) {
					hasError = true;
					get("err_name").innerHTML= "*Agency name must have more than 2 letters !";
				}
				if(get("username").value == ""){
					hasError = true;
					get("err_username").innerHTML= "*Username name please!";
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
					get("err_confirmpassword").innerHTML= "*Password didn't match!";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML= "*Email please!";
				}

				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML= "*Phone number please!";
				}
				else if(get("phone").value.length < 11) {
					hasError = true;
					get("err_phone").innerHTML= "*Number must have more than 11 numbers!";
				}
				if(get("etinum").value == ""){
					hasError = true;
					get("err_etinum").innerHTML= "*ETIN number please!";
				}
				else if(get("etinum").value.length < 6) {
					hasError = true;
					get("err_etinum").innerHTML= "*ETIN Number must have more than 6 numbers!";
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


			function checkUsername(i){
				var xhr = new XMLHttpRequest();
				xhr.open("GET","checkAgencyUsername.php?username="+i.value,true);
				xhr.onreadystatechange=function(){
					if (this.readyState == 4 && this.status == 200) {
					if(this.responseText.trim() == "invalid"){
						get("err_username").innerHTML = "Username Exist!";
					}
					else{
						get("err_username").innerHTML = "";
					}
				}
			};
			xhr.send();
		}

		function checkEmail(i){
				var xhr = new XMLHttpRequest();
				xhr.open("GET","checkAgencyEmail.php?email="+i.value,true);
				xhr.onreadystatechange=function(){
					if (this.readyState == 4 && this.status == 200) {
					if(this.responseText.trim() == "invalid"){
						get("err_email").innerHTML = "Email Exist!";
					}
					else{
						get("err_email").innerHTML = "";
					}
				}
			};
			xhr.send();
		}

		function checkEtin(i){
				var xhr = new XMLHttpRequest();
				xhr.open("GET","checkAgencyEtin.php?etin="+i.value,true);
				xhr.onreadystatechange=function(){
					if (this.readyState == 4 && this.status == 200) {
					if(this.responseText.trim() == "invalid"){
						get("err_etinum").innerHTML = "ETIN Number Exist!";
					}
					else{
						get("err_etinum").innerHTML = "";
					}
				}
			};
			xhr.send();
		}