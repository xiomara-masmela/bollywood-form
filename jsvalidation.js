function validateForm() {
  var x = document.forms["bollywoodForm"]["fname"].value;
  if (x==""){
    alert("Name must be filled out");
    return false;
  }

  var y = document.forms["bollywoodForm"]["lname"].value;
  if (y==""){
    alert("Last Name must be filled out");
    return false;
  }

  var z = document.forms["bollywoodForm"]["mnumber"].value;
  if (z==""){
    alert("Mobile must be filled out");
    return false;
  }

  if(/^[1-9]{1}[0-9]{9}$/.test(z)){
    //use
  }else{
    alert("Invalid 10 mobile number")
    number.focus()
    return false
  }

  var a = document.forms["bollywoodForm"]["email"].value;
  if (a==""){
    alert("Email must be filled out");
    return false;
  }


}
