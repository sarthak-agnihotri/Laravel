<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2A Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    @if($errors->any())
    <div style="color:red">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</div>
    @endif
    <form method="POST" action="/q3a-submit">
        @csrf
        <label>Username</label><br>
    <input type="text" name="username" value="{{ old('username') }}">
    <br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="{{ old('email') }}">
    <br><br>

    <label>Password</label><br>
    <input type="password" name="password">
    <br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>