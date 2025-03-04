<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Email Sent</title>
    <style>
        body {
            background: linear-gradient(135deg, green, #5563DE);
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            background: #fff;
            padding: 40px;
            width: 90%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.2);
            text-align: center;
            animation: fadeIn 1.2s ease-out;
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
            animation: slideDown 1s ease-out;
        }
        p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }
        .success-icon {
            font-size: 4rem;
            color: #28a745;
            margin-bottom: 20px;
            animation: popIn 0.8s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-30px);}
            to { opacity: 1; transform: translateY(0);}
        }
        @keyframes popIn {
            0% { transform: scale(0); opacity: 0; }
            60% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(1); }
        }
        .button {
            display: inline-block;
            padding: 12px 25px;
            background: #5563DE;
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .button:hover {
            background: #3e50b5;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">&#10004;</div>
        <h1>Verification Email Sent!</h1>
    </div>
</body>
</html>