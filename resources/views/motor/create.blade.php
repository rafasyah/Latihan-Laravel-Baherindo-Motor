@extends('layout.main')

@section('title', 'Add to Baherindo Motor')

@section('content')
<div class="w-full mx-auto max-w-screen-lg p-6 flex justify-center">

    {{-- Card --}}
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">
            Tambah Motor Baru
        </h2>

        <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Nama Motor --}}
            <div class="mb-5">
                <label for="nama_motor" class="block mb-2 text-sm font-medium text-gray-900">
                    Nama Motor
                </label>
                <input type="text" id="nama_motor" name="nama_motor"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                    required>
            </div>

            {{-- Harga Motor --}}
            <div class="mb-5">
                <label for="harga_motor" class="block mb-2 text-sm font-medium text-gray-900">
                    Harga Motor
                </label>
                <input type="number" id="harga_motor" name="harga_motor"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                    required>
            </div>

            {{-- Kilometer --}}
            <div class="mb-5">
                <label for="km_motor" class="block mb-2 text-sm font-medium text-gray-900">
                    Kilometer
                </label>
                <input type="number" id="km_motor" name="km_motor"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                    required>
            </div>

            {{-- Tahun Motor --}}
            <div class="mb-5">
                <label for="tahun_motor" class="block mb-2 text-sm font-medium text-gray-900">
                    Tahun Motor
                </label>
                <input type="number" id="tahun_motor" name="tahun_motor"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                    required>
            </div>

            {{-- Gambar Motor --}}
            <div class="mb-6">
                <label for="gambar_motor" class="block mb-2 text-sm font-medium text-gray-900">
                    Gambar Motor
                </label>
                <input type="file" id="gambar_motor" name="gambar_motor"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                    required>
            </div>

            {{-- Submit --}}
            <button type="submit"
                class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 transition">
                Confirm New
            </button>
        </form>

    </div>
</div>
@endsection

