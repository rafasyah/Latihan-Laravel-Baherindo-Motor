<?php

namespace App\Http\Controllers;
use App\Models\MobilBaherindo;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   { $mobil = MobilBaherindo::all();
      return view('mobil', compact('mobil'));  ;
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
  $validateData = $request->validate([
    'nama_mobil'   => 'required|string',
    'harga_mobil'  => 'required|numeric',
    'km_mobil'     => 'required|integer',
    'tahun_mobil'  => 'required|integer',
    'gambar_mobil' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
]);

// Handle image upload
if ($request->hasFile('gambar_mobil')) {
  $path = $request->file('gambar_mobil')->store('gambar_mobil', 'public');

    $validateData['gambar_mobil'] = $path;
}

MobilBaherindo::create($validateData);

return redirect('mobil');


}

    /**
     * Display the specified resource.
     */
       public function show(string $id)
    {
        $mobil = MobilBaherindo::find($id);
        return view('mobil.show', compact('mobil'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = MobilBaherindo::find($id);
        return view('mobil.edit', compact('mobil'));
    }
    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, string $id)
    {
        $mobil = MobilBaherindo::find($id);
        $validateData = $request->validate([
    'nama_mobil'   => 'required|string|max:255',
    'harga_mobil'  => 'required|numeric',
    'km_mobil'     => 'required|integer',
    'tahun_mobil'  => 'required|digits:4',
    'gambar_mobil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);

// Handle image upload
if ($request->hasFile('gambar_mobil')) {
    $path = $request->file('gambar_mobil')->store('gambar_mobil', 'public'); // use subfolder
    $validateData['gambar_mobil'] = $path;
}
$mobil->update($validateData);

return redirect('mobil');
}

    public function destroy(string $id)
    {
        $mobil = MobilBaherindo::find($id);
        $mobil->delete();

        return redirect('mobil')->with('success', 'Data berhasil dihapus!');
    }
}
