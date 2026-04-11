<h1>Add Product</h1>
<form method="POST" action="/products">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Add Product</button>
</form>