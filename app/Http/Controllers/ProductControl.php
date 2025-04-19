<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function CreateProduct()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreProduct(Request $request)
    {
        $request->validate([
            'NameProduct' => 'required',
            'PriceProduct' => 'required',
            'QuantityProduct' => 'required',
            'DescriptionProduct' => 'required',
        ]);

        Product::create([
            "NameProduct" => $request->input('NameProduct'),
            "PriceProduct" => $request->input('PriceProduct'),
            "QuantityProduct" => $request->input('QuantityProduct'),
            "DescriptionProduct" => $request->input('DescriptionProduct'),
        ]);

        return redirect('/product')->with("Pesan", "Berhasil ditambahkan data produk");
    }

    public function EditProduct(Product $product)
    {
        return view('edit', compact('product'));
    }

    public function DeleteProduct(Product $product_id)
    {
        $product_id -> delete();
        return redirect('/product')->with("Pesan", "Produk berhasil dihapus.");
    }

    public function UpdateProduct(Request $request, Product $Product)
    {
        $request->validate([
            'NameProduct' => 'required',
            'PriceProduct' => 'required',
            'QuantityProduct' => 'required',
            'DescriptionProduct' => 'required',
        ]);

        $Product->update([
            'NameProduct' => $request->input('NameProduct'),
            'PriceProduct' => $request->input('PriceProduct'),
            'QuantityProduct' => $request->input('QuantityProduct'),
            'DescriptionProduct' => $request->input('DescriptionProduct'),
        ]);

        return redirect('/product')->with("Pesan", "Produk berhasil diupdate.");
    }


}
