+ function($) {
    $('.palceholder').click(function() {
      $(this).siblings('input').focus();
    });
  
    $('.form-control').focus(function() {
      $(this).parent().addClass("focused");
    });
  
    $('.form-control').blur(function() {
      var $this = $(this);
      if ($this.val().length == 0)
        $(this).parent().removeClass("focused");
    });
    $('.form-control').blur();
  
    // validetion
    $.validator.setDefaults({
      errorElement: 'span',
      errorClass: 'validate-tooltip'
    });
  
    $("#formvalidate").validate({
      rules: {
        name: {
          required: true,
          minlength: 6
        },
        email: {
          required: true,
          
        },
        password: {
          required: true,
          minlength: 6
        },
        city:{
          required:true,
        },
        contact: {
          required:true,
          maxlength:10
        },
        address: {
          required:true,
          maxlength:50
        },
        newPassword:{
          required:true,
          minlength:6
        },
        rePassword:{
          required:true,
          minlength:6

        }
       
      },
      messages: {
        name: {
          required: "Please enter your username.",
          minlength: "Please provide valid username."
        },
        password: {
          required: "Enter your password to Login.",
          minlength: "Incorrect login or password."
        }
      }
    });
  
  }(jQuery);