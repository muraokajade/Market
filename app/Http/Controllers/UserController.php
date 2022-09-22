<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('users.index',compact('user'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $path = '';
        $image = $request->file('image');
        if(isset($image) === true) {
            $path = $image->store('images','public');
        }

        // dd($image);
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'profile' => $request->profile,
            'image' => $path,

        ]);
        return redirect()->route('users.index')->with(['message' => 'プロフィールを更新しました','status' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
