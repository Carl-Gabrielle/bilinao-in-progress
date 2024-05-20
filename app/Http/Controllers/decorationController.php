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
        $product->user_id = Auth::id();
    
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
                $cart->user_id = $user->id;
                $cart->name = $user->name;
                $cart->product_title = $product->title;
                $cart->price = $product->price;
                $cart->product_image = $product->product_image;
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

public function show($id)
{
    $product = Product::findOrFail($id);
    return view('details', compact('product'));
}
public function viewCart()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $cartItems = Cart::where('user_id', $user->id)->get();
            return view('cart.view', compact('cartItems'));
        } else {
            return redirect()->route('login');
        }
    }
    public function cartContent()
{
    if (Auth::check()) {
        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->get();
        return view('cart.partial', compact('cartItems'));
    }
    return '';
}
public function getCartItemCount()
{
    if (Auth::check()) {
        $user = Auth::user();
        $cartItemCount = Cart::where('user_id', $user->id)->count();
        return $cartItemCount;
    }
    return 0; 
}
public function deleteItem($id)
{
    if (Auth::check()) {
        $user = Auth::user();
        $cartItem = Cart::where('user_id', $user->id)->findOrFail($id);
        $cartItem->delete();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false, 'message' => 'Unauthorized']);
}


}
