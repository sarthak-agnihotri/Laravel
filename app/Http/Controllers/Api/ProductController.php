<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        return response()->json([
            'message'=>'Products fetched successfully',
            'data'=>Product::all()
        ]);
    }

    public function store(Request $request){
        $data=$request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'description' => 'nullable'
        ]);
        $product=Product::create($data);
        // Product::insert($request->all());//for multiple
        return response()->json([
            'message'=>'Product created successfully',
            'data'=>$product
        ]);
    }

    public function show($id){
        $product=Product::find($id);
        if(!$product){
            return response()->json(['message'=>'Product not found']);
        }
        return response()->json([
            'message'=>'Product Festched Successfully',
            'data'=>$product
        ]);
    }

    public function update(Request $request,$id){
        $product=Product::find($id);
        $data=$request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'description' => 'nullable'
        ]);
        $product->update($data);
        return response()->json([
            'message'=>'Product updated successfully',
            'data'=>$product
        ]);
    }

    public function destroy($id){
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully'
        ]);
    }
}
