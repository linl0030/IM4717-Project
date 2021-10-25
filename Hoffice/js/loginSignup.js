function setFormMessage(formElement, type, message){
	const messageElement = formElement.querySelector(".form-message");

	messageElement.textContent = message;
	messageElement.classList.remove("form-message-success", "form-message-error");
	messageElement.classList.add('form-message-${type}');

}

function setInputError (inputElement, message){
	inputElement.classList.add("form-input-error");
	inputElement.parentElement.querySelector(".form-input-error-message").textContent = message;

}

function clearInputError (inputElement){
	inputElement.classList.remove("form-input-error");
	inputElement.parentElement.querySelector(".form-input-error-message").textContent = ""
}

function checkPassword(inputElement){

}

var regexpEmail = /^([\w\.\-])+@([\w]+\.){1,3}([a-zA-z]){2,3}$/;
var passwordElement = document.getElementById("signupPassword");



document.addEventListener("DOMContentLoaded", () => { 
	const loginForm = document.querySelector("#login");
	const signupForm = document.querySelector("#signup");

	document.querySelector("#linkSignup").addEventListener("click", e=>{
		e.preventDefault();
		loginForm.classList.add("form-hidden");
		signupForm.classList.remove("form-hidden");
	});

	document.querySelector("#linkLogin").addEventListener("click", e=>{
		e.preventDefault();
		signupForm.classList.add("form-hidden");
		loginForm.classList.remove("form-hidden");
	});

	loginForm.addEventListener("login", e=> {
		e.preventDefault();

		//preform your Fetch login

		setFormMessage(loginForm, "error", "Invalid username/password combination");
	});

	document.querySelectorAll(".form-input").forEach(inputElement => {
		inputElement.addEventListener("blur", e => {
			if (e.target.id === "signupUsername" && e.target.value.length > 0  && e.target.value.length < 5) {
				setInputError(inputElement, "Username must be at least 10 characters in length");
			}
			if (e.target.id === "signupEmail" && !regexpEmail.test(e.target.value)){
				setInputError(inputElement, "Please enter a correct email address");
			}
			if (e.target.id === "signupPassword" && e.target.value.length < 8){
				setInputError(inputElement, "Password must be at least 8 characters, please re-enter");
			}
			if (e.target.id === "signupConfirm"){
				var passwordElement = document.getElementById("signupPassword");
				if (e.target.value != passwordElement.value){
					setInputError(inputElement, "Password does not match, please confirm");
				}
			}

		});

		inputElement.addEventListener("input", e =>{
			clearInputError(inputElement);
		});
	});
});