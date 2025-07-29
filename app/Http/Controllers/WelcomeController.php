<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {$motor = [
    ['id'=> 1, 'name' => 'Motor yamaha', 'price' => 1000000, 'img' => 'images/6wwwlJQB_400x400.jpg'],
    ['id'=> 2, 'name' => 'Motor sksk', 'price' => 1000000, 'img' => 'images/6wwwlJQB_400x400.jpg'],
    ['id'=> 3, 'name' => 'Motor wqe', 'price' => 1000000, 'img' => 'images/6wwwlJQB_400x400.jpg'],
    ['id'=> 4, 'name' => 'Motor yamqewqewaha', 'price' => 1000000, 'img' => 'images/6wwwlJQB_400x400.jpg'],
    ['id'=> 5, 'name' => 'Motor yamaeqweqwha', 'price' => 1000000, 'img' => 'images/6wwwlJQB_400x400.jpg'],
];


         return view('welcome', compact('motor')) ;
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
    public function show(string $id)
    {
        //
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
}
