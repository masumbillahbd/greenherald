<!DOCTYPE html>
<head leng="en">
  <title>Admin Login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="{{ asset('public/admin/css/login.css')}}" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
</head>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <!-- <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div> -->

    <h2>Please Sign In</h2>

    <!-- Login Form -->

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="btn" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>