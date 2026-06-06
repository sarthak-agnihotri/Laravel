<h1>Analytics Dashboard</h1>
@foreach($views as $view)
    <p>{{$view->page_name}}</p>
    <p>{{$view->visit_count}}</p>
@endforeach
