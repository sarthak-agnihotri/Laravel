<a href="{{route('test')}}">Test</a>
<a href="{{route('greet',['id'=>1])}}">User Profile</a>
<a href="{{route('users',['name'=>'John'])}}">Users</a>

<h1>Student List</h1>
<ul>
    @foreach($students as $student)
    <li>{{$student}}</li>
    @endforeach
</ul>

<h1>Student List with named routes</h1>
<ul>
    @foreach($students as $student)
    <li><a href="{{route('students.list',['name'=>$student])}}">{{$student}}</a></li>
    @endforeach
</ul>

<h1>List with comapct function</h1>
<ul>
    @foreach($students as $student)
    <li><a href="{{route('students.compact',['name'=>$student])}}">{{$student}}</a></li>
    @endforeach
</ul>