<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Moodle-Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form method="POST" action="/" class="form-signin">
      @csrf
      <div class="text-center mb-4">
        <img class="mb-4" src="https://www.flaticon.com/svg/vstatic/svg/2941/2941554.svg?token=exp=1613679060~hmac=799eb5d858863d15fa93c27170cec3d4" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      </div>

      <div class="form-label-group">
        <input type="text" name="user" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputEmail">Usuario</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>
  </body>
</html>
