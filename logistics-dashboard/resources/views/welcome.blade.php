<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #ffffff10;
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
            animation: fadeIn 0.8s ease-out;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 24px;
            background: #00c9a7;
            color: #fff;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #00b197;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Welcome to the Logistics Dashboard</h1>
        <p>Click below to check delivery proximity and visualize your logistics flow.</p>
        <a href="{{ url('/proximity-form') }}" class="btn">Go to Proximity Form</a>
    </div>
</body>
</html>