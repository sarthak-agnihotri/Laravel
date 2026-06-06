<h1>Stored Records</h1>
<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Favorite Language</th>
</tr>
@foreach($programmers as $p)
<tr>
    <td>{{$p->name}}</td>
    <td>{{$p->age}}</td>
    <td>{{$p->language}}</td>
</tr>
@endforeach
</table>