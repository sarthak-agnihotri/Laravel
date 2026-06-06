<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Programming Language Form</h1>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <p style="color:red;">{{$error}}</p>
    @endforeach
    @endif
    <form action="/q8-submit" method="POST">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name" value="{{old('name')}}">
        <br><br>
        <label>Age</label><br>
        <input type="number" name="age" value="{{old('age')}}">
        <br><br>
        <label>Favorite Programming Language</label><br>
        <select name="language">
            <option value="">Select Language</option>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
</select>
<br><br>
<button type="submit">Submit</button>
</form>
</body>
</html>