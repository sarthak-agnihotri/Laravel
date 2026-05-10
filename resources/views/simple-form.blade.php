<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h3>Simple Form</h3>
    @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="/save">
        @csrf
        Name: <input type="text" name="name" value= "{{ old('name') }}"><br><br>
        Email: <input type="email" name="email" value="{{ old('email') }}"><br><br>
        Message: <textarea name="message">{{ old('message') }}</textarea><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>