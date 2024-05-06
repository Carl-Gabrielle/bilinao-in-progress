<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    public function yourControllerMethod()
    {
        $handMadeBagsCount = Product::where('category', 'hand_made_bags')->count();
        return view('your-view', compact('handMadeBagsCount'));
    }
}
