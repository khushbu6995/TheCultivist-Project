// FIRST COLAPSE

$(document).ready(function () {
  $("#watch-me").click(function () {
    $("#show-me:hidden").show("slow");
  });
  $("#watch-me").click(function () {
    if ($("watch-me").prop("checked") === false) {
      $("#show-me").hide();
    }
  });
});
// SECOND COLLAPSE
$(document).ready(function () {
  $("#watch-me2").click(function () {
    $("#show-me2:hidden").show("slow");
  });
  $("#watch-me2").click(function () {
    if ($("watch-me2").prop("checked") === false) {
      $("#show-me2").hide();
    }
  });
});
//THIRD COLLAPSE
$(document).ready(function () {
  $("#watch-me3").click(function () {
    $("#show-me3:hidden").show("slow");
  });
  $("#watch-me3").click(function () {
    if ($("watch-me3").prop("checked") === false) {
      $("#show-me3").hide();
    }
  });
});
//FOURTH COLLAPSE
$(document).ready(function () {
  $("#watch-me4").click(function () {
    $("#show-me4:hidden").show("slow");
  });
  $("#watch-me4").click(function () {
    if ($("watch-me4").prop("checked") === false) {
      $("#show-me4").hide();
    }
  });
});

// $("#submit").click(function () {
//   var name = $("#custom").val();
//   var second = $("#gridRadios22").val();
//   if (name == "" || second == "") {
//     swal({
//       title: "Good job!",
//       text: "You clicked the button!",
//       icon: "success",
//       button: "ok",
//     });
//   } else {
//     swal({
//       title: "Good job! Form is submitted successfully",
//       text: "You clicked the button!",
//       icon: "success",
//       button: "ok",
//     });
//   }
// });
// Document is ready
$(document).ready(function () {
  // Validate Firstname
  $("#usercheck").hide();
  let firstnameError = true;
  $("#fname").keyup(function () {
    validateFirstname();
  });

  function validateFirstname() {
    let firstnameValue = $("#fname").val();
    if (firstnameValue.length == "") {
      $("#usercheck").show();
      firstnameError = false;
      return false;
    } else if (firstnameValue.length < 3 || firstnameValue.length > 10) {
      $("#usercheck").show();
      $("#usercheck").html("*length of firstname must be between 3 and 10");
      firstnameError = false;
      return false;
    } else {
      $("#usercheck").hide();
    }
  }

  // Validate Lasttname
  $("#usercheck2").hide();
  let lastnameError = true;
  $("#lname").keyup(function () {
    validateLastname();
  });

  function validateLastname() {
    let lastnameValue = $("#lname").val();
    if (lastnameValue.length == "") {
      $("#usercheck2").show();
      lastnameError = false;
      return false;
    } else if (lastnameValue.length < 3 || lastnameValue.length > 10) {
      $("#usercheck2").show();
      $("#usercheck2").html("*length of lastname must be between 3 and 10");
      lastnameError = false;
      return false;
    } else {
      $("#usercheck2").hide();
    }
  }
  // Validate Email
  const email = document.getElementById("email");
  email.addEventListener("blur", () => {
    let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let s = email.value;
    if (regex.test(s)) {
      email.classList.remove("is-invalid");
      emailError = true;
    } else {
      email.classList.add("is-invalid");
      emailError = false;
    }
  });
});

// /////////////

jQuery(".Submit").prop("disabled", true);

var toValidate = jQuery(
    ".Fname, .Lname, .Email,.inputAddress,.inputAddress2,.inputCity,.inputState,.inputZip,.inputAddress3,.inputAddress4"
  ),
  valid = false;
toValidate.keyup(function () {
  if (jQuery(this).val().length > 0) {
    jQuery(this).data("valid", true);
  } else {
    jQuery(this).data("valid", false);
  }
  toValidate.each(function () {
    if (jQuery(this).data("valid") == true) {
      valid = true;
    } else {
      valid = false;
    }
  });
  if (valid === true) {
    jQuery(".Submit").prop("disabled", false);
  } else {
    jQuery(".Submit").prop("disabled", true);
  }
});

/////////

jQuery(".Submit2").prop("disabled", true);
var toValidate2 = jQuery(".Cardnumber,.Date,.Cvv,.Firstname,.Lastname"),
  valid2 = false;
toValidate2.keyup(function () {
  if (jQuery(this).val().length > 0) {
    jQuery(this).data("valid2", true);
  } else {
    jQuery(this).data("valid2", false);
  }
  toValidate2.each(function () {
    if (jQuery(this).data("valid2") == true) {
      valid2 = true;
    } else {
      valid2 = false;
    }
  });
  if (valid2 === true) {
    jQuery(".Submit2").prop("disabled", false);
  } else {
    jQuery(".Submit2").prop("disabled", true);
  }
});

///////

jQuery(".Submit3").prop("disabled", true);
var toValidate3 = jQuery(".Que1,.Que2,.Que3"),
  valid3 = false;
toValidate3.keyup(function () {
  if (jQuery(this).val().length > 0) {
    jQuery(this).data("valid3", true);
  } else {
    jQuery(this).data("valid3", false);
  }
  toValidate3.each(function () {
    if (jQuery(this).data("valid3") == true) {
      valid3 = true;
    } else {
      valid3 = false;
    }
  });
  if (valid3 === true) {
    jQuery(".Submit3").prop("disabled", false);
  } else {
    jQuery(".Submit3").prop("disabled", true);
  }
});
