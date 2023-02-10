<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class CreateController extends Controller
{
   public function add(Request $request)
   {
       $imageName = time().'.'.$request->image->extension();
       $request->image->move(public_path('images'), $imageName);

       $state = new State();
       $state->name = $request->name;
       $state->description = $request->description;
       $state->image = '/images/' . $imageName;
       $state->save();

       return redirect('/admin');
   }
   public function create()
   {
       return view('admin/create');
   }

}
