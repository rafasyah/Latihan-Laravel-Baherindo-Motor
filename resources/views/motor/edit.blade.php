@extends('layout.main')

@section('title', 'Edit Motor - Baherindo Motor')

@section('content')
<div class="flex justify-center bg-gray-100 py-10">
    <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Data Motor</h1>

        <form action="{{ route('motor.update', $motor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Nama Motor --}}
            <div class="mb-5">
                <label for="nama_motor" class="block mb-2 text-sm font-medium text-gray-900">Nama Motor</label>
                <input value="{{ $motor->nama_motor }}" type="text" id="nama_motor" name="nama_motor"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            {{-- Harga Motor --}}
            <div class="mb-5">
                <label for="harga_motor" class="block mb-2 text-sm font-medium text-gray-900">Harga Motor</label>
                <input value="{{ $motor->harga_motor }}" type="text" id="harga_motor" name="harga_motor"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            {{-- Kilometer --}}
            <div class="mb-5">
                <label for="km_motor" class="block mb-2 text-sm font-medium text-gray-900">Kilometer</label>
                <input value="{{ $motor->km_motor }}" type="number" id="km_motor" name="km_motor"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            {{-- Tahun Motor --}}
            <div class="mb-5">
                <label for="tahun_motor" class="block mb-2 text-sm font-medium text-gray-900">Tahun Motor</label>
                <input value="{{ $motor->tahun_motor }}" type="text" id="tahun_motor" name="tahun_motor"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            {{-- Submit Button --}}
            <button type="submit" 
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                       focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Update Motor
            </button>
        </form>
    </div>
</div>
@endsection
