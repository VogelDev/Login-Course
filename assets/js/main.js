$(document).on("submit", "form.js-register", function(e){
  ajaxLogHandler(this,'register', e);
})
.on("submit", "form.js-login", function(e){
  ajaxLogHandler(this, 'login', e);
})

function ajaxLogHandler(form, action, event){
  event.preventDefault();

  var $form = $(form);
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
    url:'/login/ajax/'+action+'.php',
    data:data,
    dataType:'json',
    async:true,
  })
  .done(function(data){
    if(data.redirect !== undefined){
      window.location = data.redirect;
    }else if (data.error !== undefined){
      $error
        .html(data.error)
        .show();
    }
  })
  .fail(function(e){
    console.log(e);
  })
  .always(function(data){

  });

  return false;
}
