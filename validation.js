$(document).ready(function(){
  var $contact_form=$("#contactform");

     $contact_form.validate({

    rules: {
      name: {
        required: true,
        minlength: 3
      },
      email1: {
        required: true,
        email: true
      },
      subject:{
        required: true,
        maxlength: 750,
        minlength: 100,

      },
    },
    messages: {
      name: {
        required: "Please enter the Name",
        minlength: "Your Name must consist of at least 3 characters",
      },

      subject: {
        required: "Please enter the subject",
        maxlength: "Please the subject must consist of at must 750 characters",
        minlength: "Your subject must consist of at least 100 characters"
      }
    }


  })

  $("#subject").keyup(function(){
    var char = $(this).val().split("");
    var myNum = 0 + char.length;
    $("#num").text(myNum);
    if(myNum == 750){
      $("#subject").attr("disabled","disabled");
      $(this).css("border", '1px solid red');
      $(".error-msg").show();

    }
  })
})
