<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set New Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            color: #333333;
        }

        .error,
        .validation-errors {
            color: red;
            margin-bottom: 15px;
            text-align: center;
        }

        .validation-errors ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666666;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .button {
            display: inline-block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            var errorElement = document.getElementById("error_message");

            if (password !== confirmPassword) {
                errorElement.textContent = "Passwords do not match.";
                return false;
            }

            if (password.length < 8) {
                errorElement.textContent = "Password must be at least 8 characters long.";
                return false;
            }

            errorElement.textContent = "";
            return true;
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Set New Password</h1>
        </div>

        <!-- Display session error if available -->
        @if(session('error'))
            <div class="error">
                {{ session('error') }}
            </div>
        @endif

        <!-- Display validation errors if any -->
        @if($errors->any())
            <div class="validation-errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <!-- Token is passed back for verification -->
            <input type="hidden" name="token" value="{{ $token }}">
            <div id="error_message" class="error"></div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="password_confirmation" required>
            </div>
            <button type="submit" class="button">Set Password</button>
        </form>
    </div>
</body>

</html>