<!DOCTYPE html>
<html land="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device width, initial-scale=1" />
  <meta name="robots" content="follow" />

  <title>Page Title</title>

  <base href="/" />
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.28/css/uikit.min.css" />
</head>

<body>

  <div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
      <form class="uk-form-stacked js-login">

        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Email</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="email" required='required' placeholder="a@a.com">
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Password</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="password" required='required' placeholder="Your Password">
          </div>
        </div>
        <div class="uk-margin">
          <button class="uk-button uk-button-default" type="submit">
            Login
          </button>
        </div>
        <!-- <div class="uk-margin">
          <button class="uk-button uk-button-default" type="submit">
            Register
          </button>
        </div> -->

      </form>
    </div>
  </div>


  <!-- jQuery is required -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- UIkit JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.28/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.28/js/uikit-icons.min.js"></script>
</body>

</html>