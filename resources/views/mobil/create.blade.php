@extends('layout.main')

@section('title', 'Add to Baherindo Motor')

@section('content')
<div class="flex justify-center bg-gray-100 py-10">
    <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg bg-white p-6 rounded-lg shadow">
        @csrf

        <div class="mb-5">
            <label for="nama_mobil" class="block mb-2 text-sm font-medium text-gray-900">Nama Mobil</label>
            <input type="text" id="nama_mobil" name="nama_mobil" 
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" 
                   required>
        </div>

        <div class="mb-5">
            <label for="harga_mobil" class="block mb-2 text-sm font-medium text-gray-900">Harga Mobil</label>
            <input type="text" id="harga_mobil" name="harga_mobil" 
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" 
                   required>
        </div>

        <div class="mb-5">
            <label for="km_mobil" class="block mb-2 text-sm font-medium text-gray-900">Kilometer</label>
            <input type="number" id="km_mobil" name="km_mobil" 
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" 
                   required>
        </div>

        <div class="mb-5">
            <label for="tahun_mobil" class="block mb-2 text-sm font-medium text-gray-900">Tahun Mobil</label>
            <input type="text" id="tahun_mobil" name="tahun_mobil" 
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" 
                   required>
        </div>

        <div class="mb-5">
            <label for="gambar_mobil" class="block mb-2 text-sm font-medium text-gray-900">Gambar Mobil</label>
            <input type="file" id="gambar_mobil" name="gambar_mobil" 
                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" 
                   required>
        </div>

        <button type="submit" 
                class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
            Confirm Purchase
        </button>
    </form>
</div>
@endsection
