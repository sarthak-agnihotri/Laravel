<h1>Students Details</h1>
@foreach($students as $student)
    <p>Name: {{$student['name']}} | Marks: {{$student['marks']}}</p>
@endforeach