<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset( 'style.css' )}}">
    <link rel="icon" href="img/favicon.ico">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="{{ asset( 'img/2942004.jpg' )}}" alt="">
        <div class="text">
          <span class="text-1">Welcome to<br> Shadai Home Health Services</span>
          
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
       
        <div class="signup-form">
          <div class="title">Signup</div>
          <form id='myForm' method="post" action="{{ route('register') }}">
            @csrf
            <div class="input-boxes">
                <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" name="firstname" placeholder="Enter your firstname" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lastname" placeholder="Enter your lastname" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" name="username" placeholder="Enter your username" required>
              </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-user-doctor"></i>
                    <select name="qualification" required  class="custom-select">
                        <option value="" disabled selected>Select your job position</option>
                        <option value="Registered Nurse">Registered Nurse</option>
                        <option value="Licensed Practical Nurse">Licensed Practical Nurse</option>
                        <option value="Home Health Aide">Home Health Aide</option>
                        <option value="Occupational Therapist">Occupational Therapist</option>
                        <option value="Physical Therapist">Physical Therapist</option>
                    </select>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p style="color:red;">{{ $error }}</p>
                @endforeach
                </div>
                @endif
                <div class="button input-box">
                    <input type="submit" value="Submit">
                </div>
                <div class="text sign-up-text">Already have an account? <a href="login">Login now</label></div>
            
            </div>
         
        </form>        
    </div>
    </div>
    </div>
  </div>
</body>
</html>