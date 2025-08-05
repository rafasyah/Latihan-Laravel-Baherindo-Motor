<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotorBaherindo;
class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motor.create');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
  $validateData = $request->validate([
    'nama_motor'   => 'required|string|max:255',
    'harga_motor'  => 'required|numeric',
    'km_motor'     => 'required|integer',
    'tahun_motor'  => 'required|digits:4',
    'gambar_motor' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);

// Handle image upload
if ($request->hasFile('gambar_motor')) {
    $path = $request->file('gambar_motor')->store('gambar_motor', 'public'); // use subfolder
    $validateData['gambar_motor'] = $path;
}

MotorBaherindo::create($validateData);

return redirect('home')->with('success', 'Data berhasil disimpan!');


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
