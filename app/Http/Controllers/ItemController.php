<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
class ItemController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $recommend_items = Item::where('user_id', '!=' ,$user->id)->latest()->get();
        return view('items.index',compact('recommend_items'));
    }

    public function create()
    {

        $categories = Category::all();
        return view('items.create',compact('categories'));
    }


    public function store(Request $request)
    {
        // dd($request);
        $path = '';
        $image = $request->file('image');
        if(isset($image) === true) {
            $path = $image->store('images','public');
        }


        // dd($request);
        Item::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => $path,

        ]);
        return redirect()->route('items.index')->with(['message' => '商品を追加しました','status' => 'info']);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
