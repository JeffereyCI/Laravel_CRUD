<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    @if (session('Pesan'))
        <div class="alert alert-success">
            {{ session('Pesan') }}
        </div>
    @endif
    <h1>List Produk</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
            <th>Deskripsi</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->product_id }}</td>
                <td>{{ $product->NameProduct }}</td>
                <td>{{ $product->PriceProduct }}</td>
                <td>{{ $product->QuantityProduct }}</td>
                <td>{{ $product->DescriptionProduct }}</td>
                <td>
                    <a href="/product/{{$product->product_id}}/edit">
                        <button type="button">edit</button>
                    </a>
                    <form action="/product/{{$product->product_id}}" method="post" onsubmit="return confirm('Apakah anda ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('product.create') }}">
        <button type="button">Tambah Produk</button>
    </a>
</body>
</html>
