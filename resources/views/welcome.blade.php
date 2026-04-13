<h1>Welcome Page</h1>
<a href="{{route('home')}}">Go to Home</a>
<h3>Current URL</h3>
<p>Current URL: {{url()->current()}}</p>
<h3>Previous URL</h3>
<p>Previous URL: {{url()->previous()}}</p>
<h3>Full URL</h3>
<p>Full URL: {{url()->full()}}</p>