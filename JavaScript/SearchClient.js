function get(id){
	return document.getElementById(id);
}
function searchClient(e){
	if(e.value == ""){
		get("Search").innerHTML = "";
		return;
	}
	var xhr = new XMLHttpRequest();
	xhr.open("GET","SearchClient.php?clientkey="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			get("Search").innerHTML = this.responseText;
		}
	};
	xhr.send();
}