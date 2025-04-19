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
        return view('index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function CreateProduct()
    {
        return view('create'); //untuk menampilkan halaman add
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreProduct(Request $request)
    {
//        $request->validate([
//            'name' => 'required',
//            'price' => 'required',
//            'quantity' => 'required',
//            'description' => 'required',
//        ]);

        Request() -> NameProduct;
        $request->NameProduk = $request->input('NameProduct');
//        $request->PriceProduct = $request->input('PriceProduct');
//        $request->QuantityProduct = $request->input('QuantityProduct');
//        $request->DescriptionProduct = $request->input('DescriptionProduct');

        dd($request->NameProduk = $request->input('NameProduct'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $Product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        //
    }
}
