<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
    <br><br>

    <input type="text" name="roll_no" placeholder="Roll No">
    <br><br>

    <input type="email" name="email" placeholder="Email">
    <br><br>

    <select name="department">
        <option value="">Select Department</option>
        <option>CSE</option>
        <option>ECE</option>
        <option>ME</option>
    </select>

    <br><br>

    <button type="submit">Save</button>
</form>
</body>
</html>