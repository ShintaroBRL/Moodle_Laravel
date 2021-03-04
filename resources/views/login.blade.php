<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>serity-Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form method="POST" action="/" class="form-signin">
      @csrf
      <div class="text-center mb-4">
        <img class="mb-4" src="/images/Serity.png" alt="" width="72" height="72">
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

    @if ($errors->any())
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ERROR</h4>
                </div>
                <div class="modal-body">
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p><br>
                    @endforeach
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            
            </div>
        </div>
        <script>
                $(document).ready(function(){
                    $("#myModal").modal();
                });
        </script>
    @endif

  </body>
</html>
