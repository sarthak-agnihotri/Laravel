<h1>Edit Product</h1>
<form method="POST" action="/products/{{$id}}">
    @csrf
    @method('PUT')
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" value="{{$product}}" required>
    <button type="submit">Update Product</button>
</form>