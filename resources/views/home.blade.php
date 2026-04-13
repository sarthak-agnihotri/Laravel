<h1>Home Page</h1>
@if($name=='sarthak')
<h2>this is sarthak</h2>
@elseif($name=='bob')
<h2>this is bob</h2>
@else<h2>other user</h2>
@endif

<div>
    @foreach($admi as $user)
    <h4>{{$user}}</h4>
    @endforeach
</div>

@for($i=0;$i<10;$i++)
<h3>{{$i}}</h3>
@endfor
