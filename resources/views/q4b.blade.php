<!DOCTYPE html>
<html>
<head>
    <title>Theme Example</title>
</head>

@if($theme == 'dark')
<body style="background:black; color:white;">
@else
<body style="background:white; color:black;">
@endif

<h1>Current Theme : {{ $theme }}</h1>

<a href="/theme/light">Light Theme</a>
<br><br>

<a href="/theme/dark">Dark Theme</a>

</body>
</html>