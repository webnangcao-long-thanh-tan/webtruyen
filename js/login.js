"use strict";


// Xử lí display form login và signup
var login=document.getElementById('change-login');
var signup=document.getElementById('change-signup');

signup.addEventListener("click",function(){
	document.getElementById('containerF-signup').style.display="block";
	document.getElementById('containerF-login').style.display="none";
	login.style.backgroundColor="white";
	signup.style.backgroundColor="#add8e6";
})
login.addEventListener("click",function(){
	document.getElementById('containerF-login').style.display="block";
	document.getElementById('containerF-signup').style.display="none";
	login.style.backgroundColor="#add8e6";
	signup.style.backgroundColor="white";
})