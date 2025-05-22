<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): string
    {
        return PostsController::class;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):string
    {
        return "This is the show method at id:";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function contact():string
    {
        # $people = ['adam','evan','frank'];
        $people = [];
        return view('contact',compact('people'));
    }

    public function show_posts($id, $name):string
    {
        # return view('posts')->with('id',$id);

        return view('posts', compact('id', 'name'));

    }
}
