<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 100px; }
        .btn { padding: 10px 20px; background: #3490dc; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-size: 18px; }
        .btn:hover { background: #2779bd; }
    </style>
</head>
<body>
    <h1>Welcome to the Logistics Dashboard</h1>
    <p>Click below to check delivery proximity.</p>
    <a href="{{ url('/proximity-form') }}" class="btn">Go to Proximity Form</a>
</body>
</html>

