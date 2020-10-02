function validateForm() {
    var x = document.forms["chkForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }

    var x = document.forms["chkForm"]["inputZip"].value;
    var regex = /^\d{5}$/;
    if(regex.test(x) == false){
        alert("The lenght of zip code must be atleast five digits");
    zipCode.focus();
    return false;
    }
    if(zipCode.value == " "){
    alert("Zip code Field cannot be left empty");
    zipCode.focus();
    return false;
    }
    return false;
  }