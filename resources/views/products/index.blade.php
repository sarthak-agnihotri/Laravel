<h1>Products Details</h1>
@foreach($products as $product)
    <p>{{ $product }}</p>
@endforeach
// Display success message after adding a product
@if(session('message'))
    <p>{{ session('message') }}</p>
@endif
//Display error message if product not found
@if(session('message'))
    <p>{{ session('message') }}</p>
@endif