<!DOCTYPE html>
<html>
<head>
    <title>Available Jobs</title>
</head>
<body>
    <h1>Available Job Openings</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @foreach ($jobs as $job)
        <div>
            <h2>{{ $job['title'] }}</h2>

            <a href="{{ route('jobs.apply', $job['id']) }}">
                Apply Now
            </a>
        </div>
    @endforeach
</body>
</html>