@extends('layout.main')

@section('title', 'Add to Baherindo Motor')

@section('content')
<div class="justify-center bg-gray-100 py-10">
   <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-5">
            <label for="nama_motor" class="block mb-2 text-sm font-medium text-gray-900">Nama Motor</label>
            <input type="text" id="nama_motor" name="nama_motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>

        <div class="mb-5">
            <label for="harga_motor" class="block mb-2 text-sm font-medium text-gray-900">Harga Motor</label>
            <input type="text" id="harga_motor" name="harga_motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>

        <div class="mb-5">
            <label for="km_motor" class="block mb-2 text-sm font-medium text-gray-900">Kilometer</label>
            <input type="number" id="km_motor" name="km_motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>

        <div class="mb-5">
            <label for="tahun_motor" class="block mb-2 text-sm font-medium text-gray-900">Tahun Motor</label>
            <input type="text" id="tahun_motor" name="tahun_motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>

        <div class="mb-5">
            <label for="gambar_motor" class="block mb-2 text-sm font-medium text-gray-900">Gambar Motor</label>
            <input type="file" id="gambar_motor" name="gambar_motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>

        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Confirm Purchase</button>
    </form>
</div>
@endsection
