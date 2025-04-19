<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>List Produk</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->NameProduct }}</td>
                <td>{{ $product->DescriptionProduct }}</td>
                <td>{{ $product->PriceProduct }}</td>
                <td>{{ $product->QuantityProduct }}</td>
                <td> <button>edit</button> <button>Hapus</button> </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
