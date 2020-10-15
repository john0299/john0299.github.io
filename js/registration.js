var currentTab = 0; 
showTab(currentTab);

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
    document.getElementById("signupBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    // document.getElementById("nextBtn").innerHTML = "Sign me up!";
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("signupBtn").style.display = "inline";
  
  } else {
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("nextBtn").innerHTML = "Next";
    // document.getElementsById("nextBtn").setAttribute('type', 'submit');
  }
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");

  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    
    document.getElementById("regForm").submit('dashboard.php');
  }
 
  showTab(currentTab);
}

function validateForm() {
  var x, y, ctr = true;

  x = document.getElementsByClassName("tab");
  // y = x[currentTab].getElementsByTagName("input");
  y = x[currentTab].getElementsByClassName("form-control");

  for (var i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " is-invalid";
      ctr = false;
    } else {
      y[i].className += " is-valid";
    } 
  }
  return ctr; // return the valid status
}
