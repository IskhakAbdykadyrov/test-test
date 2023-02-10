<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show1($id)
    {
        $products = Product::find($id);
        $comments = Comment::where('product_id', $id)->get();
        return view('home/show', compact('products', 'comments'));
    }
}
