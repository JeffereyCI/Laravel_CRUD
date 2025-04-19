<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <a href="{{ route('product.home') }}"><button type="button">Kembali</button></a>
    <h1>Input Produk</h1>
    <form action="{{ route('product.update', $product->product_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="NameProduct">Name:</label>
        <input type="text" name="NameProduct" value="{{ old('NameProduct', $product->NameProduct) }}">
<br>
        <label for="PriceProduct">Price:</label>
        <input type="number" name="PriceProduct" value="{{ old('PriceProduct', $product->PriceProduct) }}">
<br>
        <label for="QuantityProduct">Quantity:</label>
        <input type="number" name="QuantityProduct" value="{{ old('QuantityProduct', $product->QuantityProduct) }}">
<br>
        <label for="DescriptionProduct">Description:</label>
        <input type="text" name="DescriptionProduct" value="{{ old('DescriptionProduct', $product->DescriptionProduct) }}">
<br>
        <button type="submit">Update</button>
    </form>

</body>
</html>
