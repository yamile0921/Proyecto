var myInput = document.getElementById("password1");
var myInput1 = document.getElementById("password2");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var same = document.getElementById("same");

// Cuando el usuario hace clic en el campo de contraseña, muestra el cuadro de mensaje
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

myInput1.onfocus = function() {
  document.getElementById("message2").style.display = "block";
}

// Cuando el usuario hace clic fuera del campo de contraseña, oculta el cuadro de mensaje
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

myInput1.onblur = function() {
  document.getElementById("message2").style.display = "none";
}

// Cuando el usuario comienza a escribir algo dentro del campo de contraseña
myInput.onkeyup = function() {
  // Valida letra minúscula
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Valida letra mayúscula
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Valida que tenga números
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Valida número de caracteres
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
  
  //Validar que las contraseñas coincidan
	if(myInput != myInput1) {
	same.classList.remove("valid1");
    same.classList.add("invalid1");
  } else {
	same.classList.remove("invalid1");
    same.classList.add("valid1");
  }
}