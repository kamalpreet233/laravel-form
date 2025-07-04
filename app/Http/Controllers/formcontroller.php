<?php

namespace App\Http\Controllers;
use App\Models\user;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = user::all();
    
        return view('show',compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required|string|regex:/^[\pL\s]+$/u|max:20|min:2',
            'email' => 'required|email:rfc,dns,filter',
            'state' => 'required',
            'city' => 'required|regex:/^[\pL\s]+$/u|max:20|min:3',
        ],[
            'name.regex'=> 'Name feild must only contain letters',
            'city.regex'=> 'Name feild must only contain letters'

        ]);
       user::create($request->all());
       return redirect()->route('show')->with('success','data inserted successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = user::find($id);
        return view('edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $request->validate([
            'name' => 'required|string|regex:/^[\pL\s]+$/u|max:20|min:2',
            'email' => 'required|email:rfc,dns,filter',
            'state' => 'required',
            'city' => 'required|regex:/^[\pL\s]+$/u|max:20|min:3',
        ],[
            'name.regex'=> 'Name feild must only contain letters',
            'city.regex'=> 'Name feild must only contain letters'

        ]);
        $post = user::find($id);
        $post->update($request->all());
        return redirect()->route('show')->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = user::find($id);
        $post->delete();
        return redirect()->route('show')->with('success','data delete successfully');
    }
}
