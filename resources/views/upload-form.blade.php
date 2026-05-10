<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>File Upload Form</h2>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose a file:</label>
        <input type="file" id="file" name="file" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
    
</body>
</html>