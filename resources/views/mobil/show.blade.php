@extends('layout.main')

@section('title', $mobil->nama_mobil . ' - Baherindo Mobil')

@section('content')

{{-- Header Image --}}
<img 
    src="{{ asset('storage/' . $mobil->gambar_mobil) }}" 
    alt="{{ $mobil->nama_mobil }}" 
    class="w-full max-h-[200px] object-cover rounded-lg mb-8"
/>

{{-- Container --}}
<div class="max-w-screen-lg mx-auto px-6">

    {{-- mobil Info Card --}}
    <div class="bg-white shadow-md rounded-lg p-6 text-center">
        
        {{-- Title --}}
        <h2 class="text-3xl font-semibold text-gray-800">
            {{ $mobil->nama_mobil }}
        </h2>

        {{-- Price --}}
        <p class="mt-4 text-blue-600 font-bold text-2xl">
            Rp {{ number_format($mobil->harga_mobil, 0, ',', '.') }}
        </p>

        {{-- Details --}}
        <div class="mt-4 space-y-2 text-gray-700">
            <p><strong>Tahun:</strong> {{ $mobil->tahun_mobil }}</p>
            <p><strong>Jarak Tempuh:</strong> {{ number_format($mobil->km_mobil, 0, ',', '.') }} km</p>
        </div>

        {{-- Action Buttons --}}
        <div class="mt-6 flex flex-wrap gap-3 justify-center">
            {{-- WhatsApp Order --}}
            <a href="#" 
                class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                Order via Whatsapp
            </a>

            {{-- Edit --}}
            <a href="{{ route('mobil.edit', $mobil->id) }}" 
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Edit Data
            </a>

            {{-- Delete --}}
            <form action="{{ route('mobil.destroy', $mobil->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" 
                    class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                    Hapus
                </button>
            </form>
        </div>

    </div>

</div>
@endsection
