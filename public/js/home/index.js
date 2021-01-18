  function checkPasswordStrength() {
      var number = /([0-9])/;
      var alphabets = /([a-zA-Z])/;
      var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
      
      if($('#password').val().length<6) {
          $('#password-strength-status').removeClass();
          $('#password-strength-status').addClass('weak-password');
          $('#password-strength-status').html("Weak (should be atleast 6 characters.)").css('color','red');
      } else {  	
          if($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {            
              $('#password-strength-status').removeClass();
              $('#password-strength-status').addClass('strong-password');
              $('#password-strength-status').html("Strong").css('color','green');
          } else {
              $('#password-strength-status').removeClass();
              $('#password-strength-status').addClass('medium-password');
              $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)").css('color','orange');
          } 
      }

      $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
          $('#message').html('Password Matched!').css('color', 'green');
        } else 
          $('#message').html('Password Not Matching!!').css('color', 'red');
      });
      
  }

  