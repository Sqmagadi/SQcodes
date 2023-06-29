// Add active class to the current button (highlight it)
var header = document.getElementById("topnav");
var btns = header.getElementsByClassName("dropbtn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}

// MODAL LOGIN FORMS
var openForm = document.getElementById('studentLogin');
var loginForm = document.getElementById('studentloginForm');
var closeForm = document.getElementById('close');

var openForm2 = document.getElementById('staffLogin');
var loginForm2 = document.getElementById('staffloginForm');
var closeForm2 = document.getElementById('close2');

// STUDENTS
openForm.onclick= function(){
    studentloginForm.style.display = "block";
}

closeForm.onclick = function(){
    studentloginForm.style.display = "none";
}


//STAFF
openForm2.onclick= function(){
    staffloginForm.style.display = "block";
}

closeForm2.onclick = function(){
    staffloginForm.style.display = "none";
}
