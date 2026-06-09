<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>String</h2>
    <p>{{$message}}</p>
    <h2>Array</h2>
    <ul>
        @foreach($students as $student)
        <li>{{$student}}</li>
        @endforeach
</ul>
<h2>Objects</h2>
<p>Course:{{$course->name}}</p>
<p>Duration:{{$course->duration}}</p>
</body>
</html>