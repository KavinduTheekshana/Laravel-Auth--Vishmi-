<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="ui/fonts/icomoon/style.css">

    <link rel="stylesheet" href="ui/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="ui/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="ui/css/style.css">

    <title>Login #2</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('ui/images/bg_1.png');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">

          @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif


            <h3>Login to <strong>Medical Application</strong></h3>
            <p class="mb-4">Please Enter Your credentioal and Login</p>
            <form action="{{ route('login') }}" method="post">
            @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" name="email" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-danger">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="ui/js/jquery-3.3.1.min.js"></script>
    <script src="ui/js/popper.min.js"></script>
    <script src="ui/js/bootstrap.min.js"></script>
    <script src="ui/js/main.js"></script>
  </body>
</html>