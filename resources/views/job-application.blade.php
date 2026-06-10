<!DOCTYPE html>
<html>
<head>
    <title>Job Application</title>
</head>
<body>
    <h1>Apply for Job #{{ $id }}</h1>

    <form
        method="POST" action="{{ route('jobs.submit', $id) }}">
        @csrf

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <p>{{ $message }}</p> @enderror

        <br>

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email') <p>{{ $message }}</p> @enderror

        <br>

        <button type="submit">Submit Application</button>
    </form>
</body>
</html>