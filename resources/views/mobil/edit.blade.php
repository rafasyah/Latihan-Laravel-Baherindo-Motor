@extends('layout.main')

@section('title', 'Edit mobil - Baherindo mobil')

@section('content')
<div class="flex justify-center bg-gray-100 py-10">
    <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Data mobil</h1>

        <form action="{{ route('mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Nama mobil --}}
            <div class="mb-5">
                <label for="nama_mobil" class="block mb-2 text-sm font-medium text-gray-900">Nama mobil</label>
                <input value="{{ $mobil->nama_mobil }}" type="text" id="nama_mobil" name="nama_mobil"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            {{-- Harga mobil --}}
            <div class="mb-5">
                <label for="harga_mobil" class="block mb-2 text-sm font-medium text-gray-900">Harga mobil</label>
                <input value="{{ $mobil->harga_mobil }}" type="text" id="harga_mobil" name="harga_mobil"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            {{-- Kilometer --}}
            <div class="mb-5">
                <label for="km_mobil" class="block mb-2 text-sm font-medium text-gray-900">Kilometer</label>
                <input value="{{ $mobil->km_mobil }}" type="number" id="km_mobil" name="km_mobil"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            {{-- Tahun mobil --}}
            <div class="mb-5">
                <label for="tahun_mobil" class="block mb-2 text-sm font-medium text-gray-900">Tahun mobil</label>
                <input value="{{ $mobil->tahun_mobil }}" type="text" id="tahun_mobil" name="tahun_mobil"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            {{-- Submit Button --}}
            <button type="submit" 
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                       focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Update mobil
            </button>
        </form>
    </div>
</div>
@endsection
