<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Upload Multiple Images</h2>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color:red;">{{ $error }}</p>
    @endforeach
@endif

<form action="/q3-submit" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="file" name="images[]" multiple>

    <br><br>

    <button type="submit">Upload</button>
</form>
</body>
</html>
<!-- php artisan storage:link -->