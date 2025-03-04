<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #eeeeee;
        }

        .header h1 {
            margin: 0;
            color: #333333;
        }

        .content {
            padding: 20px 0;
            text-align: center;
        }

        .content p {
            color: #666666;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            padding-top: 20px;
            color: #999999;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Change Password</h1>
        </div>
        <div class="content">
            <p>Hi {{ $name }},</p>
            <p>You requested to change your password. Please click the button below to reset your password:</p>
            <a href="{{ route('password.reset', $token) }}" class="button">Change Password</a>
        </div>
        <div class="footer">
            <p>If you did not request a password change, no further action is required.</p>
            <p>&copy; {{ date('Y') }} Shadai Trainings. All rights reserved.</p>
        </div>
    </div>
</body>

</html>