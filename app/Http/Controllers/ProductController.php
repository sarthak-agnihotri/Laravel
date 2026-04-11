<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products=['Laptop','Smartphone','Tablet'];
        return view('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->input('name');
        // Here you would typically save the product to the database
        // For this example, we'll just return a success message
        return redirect('/products')->with('message', $name);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $products=['Laptop','Smartphone','Tablet'];
         if(isset($products[$id])){
             return view('products.show',['product'=>$products[$id]]);
         }else{
             return redirect('/products')->with('message', 'Product not found!');
         }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = ['Laptop','Smartphone','Tablet'];

        if(isset($products[$id])){
            return view('products.edit', [
                'id' => $id,
                'product' => $products[$id]
            ]);
        }   else {
            return redirect('/products')->with('message', 'Product not found!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
