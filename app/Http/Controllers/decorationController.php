<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class decorationController extends Controller
{
    public function homeDecor(Request $request)
    {
        $homeDecorationsProducts = Product::where('category', 'home_decorations')->get();

        return view('decorations.home_decor', ['homeDecorationsProducts' => $homeDecorationsProducts]);
    }
    
    public function uploadproduct(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string',
        'category' => 'required|in:home_decorations,tie_dye_shirts,hand_made_bags,accessories,paintings,hand_made_mats',
        'stock' => 'required|integer',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);
    $imageName = time().'.'.$request->product_image->extension();  
    $request->product_image->move(public_path('images'), $imageName);

    $product = new Product();
    $product->title = $validatedData['title'];
    $product->category = $validatedData['category'];
    $product->stock = $validatedData['stock'];
    $product->price = $validatedData['price'];
    $product->description = $validatedData['description'];
    $product->product_image = $imageName; 
    $product->save();

    return redirect()->back()->with('success', 'Product uploaded successfully.');
}
}
