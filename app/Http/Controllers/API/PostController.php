<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('hello');
        // dd(post::all());
        // $post = post::all();
        // return response()->json($post,200);
        return response()->json($post=post::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = post::create([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return response()->json($post,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $post = post::find($id);
        // return response()->json($post,200);
        return response()->json($post=post::find($id),200);//127.0.0.1/8000/api/post/{id}
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = post::findOrfail($id);
        $post ->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return response()->json(['msg'=>'post updated'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = post::findOrfail($id);
        $post ->delete();
        return response()->json(['msg'=>'success delete'],200);
    }
    
}
