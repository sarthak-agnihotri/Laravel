<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('error'))
    <p>{{session('error')}}</p>
    @endif
    <form action="/login-user" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Name" value="{{old('name')}}">
    <br><br>

    <input type="password" name="password" placeholder="Enter Password">
    <br><br>

    <button type="submit">Login</button>
</form>
</body>
</html>