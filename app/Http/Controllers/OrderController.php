<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return view('order', [
            'title' => 'Order',
            'active' => 'order',
            'posts' => Post::all()
        ]);
    }

     public function store(Request $request)
    {
        
       $validatedData = $request->validate([
           'nama' => 'required|max:255',
           'id_game' => ['required', 'min:3', 'max:255'],
           'no_hp' => 'required',
           'post_id' => 'required',
           'keterangan' => 'required'
       ]);

        Order::create($validatedData);

        return redirect('/order')->with('success', 'Order successfull !! Wait');
    }
}
