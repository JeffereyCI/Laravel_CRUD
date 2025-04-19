<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Input Produk</h1>
    <form id="FormInputProduct" action="/" method="post">
        @csrf
        <label for="NameProduct">Name Product : </label>
        <input type="text" id="NameProduct" name="NameProduct">
        <br>
        <label for="PriceProduct">Price Product : </label>
        <input type="number" id="PriceProduct" name="PriceProduct">
        <br>
        <label for="QuantityProduct">Quantity Product : </label>
        <input type="number" id="QuantityProduct" name="QuantityProduct">
        <br>
        <label for="DescriptionProduct">Description Product : </label>
        <input type="text" id="DescriptionProduct" name="DescriptionProduct">
        <br>
        <button name="submit" id="submit">Save</button>
    </form>
</body>
</html>
