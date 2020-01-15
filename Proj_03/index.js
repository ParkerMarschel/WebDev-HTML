
function filled(){
	document.getElementById("submit-btn").disabled = false;
	var userName, name, phone, email, password, passwordCon;
	var errorMsg = "";
	userName = document.getElementById("userName").value;
	name = document.getElementById("name").value;
	phone = document.getElementById("phone-number").value;
	email = document.getElementById("email").value;
	password = document.getElementById("password").value;
	passwordCon = document.getElementById("passwordCon").value;
	
	if(userName == "" || name == "" || email == "" || password == "" || passwordCon == "")
	{
		errorMsg += "Missing required values:"; 
		if(userName == "")
		{
			errorMsg += " UserName - ";
		}
		if(name == "")
		{
			errorMsg += " Name -";
		}
		if(email == "")
		{
			errorMsg += " Email -";
		}
		if(password == "")
		{
			errorMsg += " Password -";
		}
		if(passwordCon == "")
		{
			errorMsg += " Password-Confirmation.";
		}
		document.getElementById("submit-btn").disabled = true;
	}
	document.getElementById("required-field-error").innerHTML = errorMsg;
	
	runTest();
}

function emailValidate()
{
	var validator = /\S+@\S+/;
	var email = document.getElementById("email").value;
	if(!validator.test(email))
	{
		document.getElementById("Invalid-email-error").innerHTML = "invalid email address";
		document.getElementById("submit-btn").disabled = true;
	}
	
}

function passwordTest()
{
	var password, passwordCon, number, capitals;
	number = /[0-9]/;
	capitals = /[A-Z]/;
	password = document.getElementById("password").value;
	passwordCon = document.getElementById("passwordCon").value;
	
	// Condition if they are not the same
	if(password !== passwordCon)
	{
		document.getElementById("submit-btn").disabled = true;
		document.getElementById("passwordmismatch-error").innerHTML = "Passwords mismatched.";
		if(password.length < 8 || !number.test(password) || !capitals.test(password))
		{
			document.getElementById("unmet-password-confirmation-error").innerHTML = "Password needs to be 8 or more characters, have one capital, and have one number.";
		}
	}
	else
	{
		if(password.length < 8 || !number.test(password) || !capitals.test(password))
		{
			document.getElementById("submit-btn").disabled = true;
			document.getElementById("unmet-password-confirmation-error").innerHTML = "Password needs to be 8 or more characters, have one capital, and have one number.";
		}
	}
}

function displayReg()
{
	alert("Thank you for your registration");
}

function runTest()
{
	emailValidate();
	passwordTest();
}