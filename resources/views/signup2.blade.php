<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/password-resets/password-reset-9/assets/css/password-reset-9.css">
    <title>Shadai Training</title>
</head>
<body>
  <style>
    .omo{
      background-color: white;
     
    }
  </style>
    <!-- Password Reset 9 - Bootstrap Brain Component -->
<section class=" py-3 py-md-5 py-xl-8 omo">
  <div class="container">
    <div class="row gy-4 align-items-center omo">
      <div class="col-12 col-md-6 col-xl-7 ">
        <div class="d-flex justify-content-center text-success">
          <div class="col-12 col-xl-9 omo">
            <img class="img-fluid rounded mb-4" loading="lazy" src="{{ asset('img/logo.png') }}" width="245" height="80" alt="">
            <hr class="border-primary-subtle mb-4">
            <h2 class="h1 mb-4">We make digital products that drive you to stand out.</h2>
            <p class="lead mb-5">We write words, take photos, make videos, and interact with artificial intelligence.</p>
            <div class="text-endx">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-5">
        <div class="card border-0 rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-4">
                  <h2 class="h3">Register Here</h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Provide the right information and you are all set!😁 </h3>
                </div>
              </div>
            </div>
            <form action="{{ route('register') }}" method="post">
            @csrf
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-0">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your firstname" value="{{ old('firstname') }}" required>
                    <label for="firstname" class="form-label">Firstname</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating mb-0">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your lastname" value="{{ old('lastname') }}" required>
                    <label for="lastname" class="form-label">Lastname</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating mb-0">
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                    <label for="email" class="form-label">Email</label>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-floating mb-0">
                    <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}" placeholder="Enter a username" required>
                    <label for="username" class="form-label">Username</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating mb-0">
                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="Enter a password" required>
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating mb-0">
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm your password" required>
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                  </div>
                </div>

                

                <div class="col-12">
                  <div class="form-floating mb-0">
                    <select name="qualification" required class="form-control" class="custom-select">
                        <option value="" disabled selected>Select your job position</option>
                        <option value="Registered Nurse">Registered Nurse</option>
                        <option value="Licensed Practical Nurse">Licensed Practical Nurse</option>
                        <option value="Home Health Aide">Home Health Aide</option>
                        <option value="Occupational Therapist">Occupational Therapist</option>
                        <option value="Physical Therapist">Physical Therapist</option>
                    </select>
                  </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p style="color:red;">{{ $error }}</p>
                @endforeach
                </div>
                @endif

                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-success btn-lg" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4">
                  <a href="login" class="link-secondary text-decoration-none">Already have an account?</a>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>