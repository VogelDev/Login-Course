$(document).on("submit", "form.js-register", function(e){
  e.preventDefault();

  var $form = $(this);
  var $error = $(".js-error", $form);
  $error.hide();
  var data = {
    email: $("input[type='email']", $form).val(),
    password: $("input[type='password']", $form).val(),
  }

  if(data.email.length < 6){
    $error
      .text("Please enter a valid email")
      .show();
    return false;
  }else if(data.password.length < 8){
    $error
      .text("Please enter a valid password greater than 8 characters")
      .show();
    return false;
  }

  $.ajax({
    type:'POST',
    url:'/login/ajax/register.php',
    data:data,
    dataType:'json',
    async:true,
  })
  .done(function(data){
    if(data.redirect !== undefined){
      // window.location = data.redirect;
    }
  })
  .fail(function(e){

  })
  .always(function(data){

  });

  return false;
})
