<!DOCTYPE html>
<html>
<head>
    <title>URL Demo</title>
</head>
<body>

<h2>Current URL</h2>
<p>{{ url()->current() }}</p>

<h2>Full URL</h2>
<p>{{ url()->full() }}</p>

<h2>Previous URL</h2>
<p>{{ url()->previous() }}</p>

</body>
</html>