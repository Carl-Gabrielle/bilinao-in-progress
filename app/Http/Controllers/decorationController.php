<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class decorationController extends Controller
{
    public function homeDecor(Request $request)
    {
        $homeDecorationsProducts = Product::where('category', 'home_decorations')->get();
        $homeDecorationsCount = Product::where('category', 'home_decorations')->count();

        return view('decorations.home_decor', [
            'homeDecorationsProducts' => $homeDecorationsProducts,
            'homeDecorationsCount' => $homeDecorationsCount,
        ]);
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
    
        // Handle file upload
        $imageName = time().'.'.$request->product_image->extension();  
        $request->product_image->move(public_path('images'), $imageName);
    
        // Create a new product instance
        $product = new Product();
        $product->title = $validatedData['title'];
        $product->category = $validatedData['category'];
        $product->stock = $validatedData['stock'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['description'];
        $product->product_image = $imageName;
    
        // Set the user_id to the ID of the currently authenticated user
        $product->user_id = Auth::id();
    
        // Save the product
        $product->save();
    
        return redirect()->back()->with('success', 'Product uploaded successfully.');
    }
    
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $product = Product::find($id);
            if ($product->stock > 0) {
                $product->stock--;
                $product->save();
                $user = auth()->user();
                $cart = new Cart;
                $cart->name = $user->name;
                $cart->product_title = $product->title;
                $cart->price = $product->price;
                $cart->save();
                return redirect()->back()->with('success', 'Product added to cart.');
            } else {
                return redirect()->back()->with('error', 'Sorry, this product is out of stock.');
            }
        } else {
            return view('users.login');
        }
    }
    public function search(Request $request)
{
    $query = $request->input('query');
    $results = collect([]);

    if (!empty($query)) {
        $results = Product::where('title', 'like', "%$query%")->get();
    }
    return view('dashboard.search_results', ['results' => $results, 'query' => $query]);
}

    
}
