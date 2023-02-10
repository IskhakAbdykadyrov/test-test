<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->text = $request->text;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->product_id = $request->product_id;
        $comment->save();

        return redirect()->back();
    }
}
