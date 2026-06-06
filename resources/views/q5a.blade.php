<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PDF Upload Form</h2>
    @if($errors->any())
    <div style="color:red">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
</div>
@endif
<form method="POST" action="/q5a-submit" enctype="multipart/form-data">
    @csrf
    <input type="file" name="pdf">
    <br>
    <button type="submit">Upload PDF</button>
</form>
</body>
</html>