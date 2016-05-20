function test(){

	var user = document.getElementById("email");
	var pass = document.getElementById("password");

	if(user.value==""){
		if(pass.value==""){
			window.alert("Incorrect username!");
		}else{
			window.alert("Welcome!");
		}

		window.alert("Incorrect password!");
	}else{
		window.alert("Hi!");
	}

}