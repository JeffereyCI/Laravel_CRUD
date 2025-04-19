<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <a href="{{ route('product.home') }}"><button type="button">Kembali</button></a>
    <h1>Input Produk</h1>
    <form id="FormInputProduct" action="/product" method="post">
        @csrf
        <label for="Nama">Name Product : </label>
        <input type="text" id="NameProduct" name="NameProduct">
        <br>
        <label for="Price">Price Product : </label>
        <input type="number" id="PriceProduct" name="PriceProduct">
        <br>
        <label for="Quantity">Quantity Product : </label>
        <input type="number" id="QuantityProduct" name="QuantityProduct">
        <br>
        <label for="Description">Description Product : </label>
        <input type="text" id="DescriptionProduct" name="DescriptionProduct">
        <br>
        <button name="submit" id="submit">Save</button>
    </form>
</body>
</html>
