<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    @if($errors->any())
    <div style="color:red">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</div>
    @endif
    <form action="/show" method="POST"enctype="multipart/form-data">
        @csrf
        <!-- @method('DELETE') -->
        <label>Name:</label>
        <input type="text" name="name" value="{{old('name')}}">
        <!-- @error('name')
        <span style="color:red">{{$message}}</span>
        @enderror -->
        <br><br>
        <label>Email:</label>
        <input type="text" name="email"value="{{old('email')}}">
        <!-- @error('email')
        <span style="color:red">{{$message}}</span>
        @enderror -->
        <br><br>
        <label>Age:</label>
        <input type="text" name="age"value="{{old('age')}}">
        <!-- @error('age')
        <span style="color:red">{{$message}}</span>
        @enderror -->
        <br><br>
        <label>Password:</label>
        <input type="password" name="password">
        <!-- @error('password')
        <span style="color:red">{{$message}}</span>
        @enderror -->
        <br><br>
        <label>Profile Image:</label>
        <input type="file" name="file">
        <br><br>
        <button type="submit">Submit</button>
</form>
</body>
</html>