<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index(){
        //$items = Item::all();
        $items = Item::paginate(10);
        return view('items.index',compact('items'));
    }//end method

    public function store(Request $request)
    {
        $request->validate([
           /* 'name'=>'required|string|max:255',
            'price'=> 'required|numeric',*/
            'items' => 'required|array',
            'items.*.name' => 'required|string|max:255',
            'items.*.price' => 'required|numeric',

        ]);
/*
        Item::create([
            'name'=>$request->name,
            'price'=>$request->price,

        ]);
//return redirect()->back()->with('success','Item added successfully!');
       return response()->json(['success'=> true]);
*/
        foreach ($request->items as $itemData) {
            Item::create($itemData);
        }

        return redirect()->back()->with('success', 'Items added successfully.');

    }

    public function usersList(){
         //$items = Item::all();
         $users = User::paginate(10);
          // return $users;
         return view('items.users',compact('users'));
      


    }



}
//php artisan make:controller ItemController
