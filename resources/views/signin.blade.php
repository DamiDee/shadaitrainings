<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Shadai Login</title>
    <link rel="stylesheet" href="{{ asset( 'style.css' )}}">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
  <body>
      <a href="javascript:history.back()" class="back-button" style="color: white; position:relative; bottom:330px; right:200px; text-decoration:none;">
        <span>Back</span>
        </a>
    <div class="container">
      <div class="cover">
        <div class="front">
          <img src="{{ asset( 'img/2942004.jpg' )}}" alt="">
        
          <div class="text">
            <span class="text-1">Welcome Back to<br> Shadai Home Health Services</span>
            
          </div>
        </div>
        <div class="back">
         <a href="javascript:history.back()" class="back-button">
        <span>Back</span>
        </a>
          <div class="text">
            <span class="text-1">Complete miles of journey <br> with one step</span>
            <span class="text-2">Let's get started</span>
          </div>
        </div>
      </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login</div>
        <form method="post" action="{{ route('login') }}">
         @csrf
          <div class="input-boxes">
            <div class="input-box">
              <i class="fas fa-user"></i>
              <input type="email" name="login" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Enter your password" required>
            </div>
             @if ($errors->has('login'))
                    <div class="error-message" style="color:red">
                        {{ $errors->first('login') }}
                    </div>
                @endif
            <div class="button input-box">
              <input type="submit" value="Submit">
            </div>
            <div class="text sign-up-text">Don't have an account? <a href="{{ route('register') }}">Signup now</a></div>
          </div>
      </form>
    </div>
    </div>
    </div>
    </div>
  </body>
</html>