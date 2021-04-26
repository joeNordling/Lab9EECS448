// Regex help from ui.dev
function emailIsValid (email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}
function validate(){
  console.log("hi");
  
  if(!emailIsValid(document.querySelector("#form > input[type=text]:nth-child(1)").value)){
	alert( "Please input a valid email" );
	return false;
  }
  if(document.querySelector("#form > input[type=text]:nth-child(7)").value < 0){
	alert( "Please select a non negative number for apples" );
	document.querySelector("#form > input[type=text]:nth-child(7)").focus();
	return false;
  }
  if(document.querySelector("#form > input[type=text]:nth-child(11)").value < 0){
	alert( "Please select a non negative number for oranges" );
	document.querySelector("#form > input[type=text]:nth-child(11)").focus();
	return false;
  }
  if(document.querySelector("#form > input[type=text]:nth-child(15)").value < 0){
	alert( "Please select a non negative number for bananas" );
	document.querySelector("#form > input[type=text]:nth-child(15)").focus();
	return false;
  }
  var radios = document.querySelectorAll('input[type="radio"]:checked');
  var value = radios.length>0? radios[0].value: null;
  if(value == null){
	alert( "Please select a shipping option" );
	return false;
  }
  
  return true;
};
