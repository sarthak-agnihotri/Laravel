<h1>Login Form</h1>

@if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif

<form action="/q6-login" method="POST">
    @csrf

    <input type="text" name="login" placeholder="Enter Email or Username">
    <br><br>

    <input type="password" name="password" placeholder="Enter Password">
    <br><br>

    <button type="submit">Login</button>
</form>