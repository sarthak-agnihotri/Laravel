<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <h1>Welcome to the Dashboard</h1>
    <p>You have successfully logged in and accessed the dashboard.</p>
</body>
</html>