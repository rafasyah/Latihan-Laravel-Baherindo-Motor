@extends('layout.main')

@section('title', $motor->nama_motor . ' - Baherindo Motor')

@section('content')

{{-- Header Image --}}
<img 
    src="{{ asset('storage/' . $motor->gambar_motor) }}" 
    alt="{{ $motor->nama_motor }}" 
    class="w-full max-h-[200px] object-cover rounded-lg mb-8"
/>

{{-- Container --}}
<div class="max-w-screen-lg mx-auto px-6">

    {{-- Motor Info Card --}}
    <div class="bg-white shadow-md rounded-lg p-6 text-center">
        
        {{-- Title --}}
        <h2 class="text-3xl font-semibold text-gray-800">
            {{ $motor->nama_motor }}
        </h2>

        {{-- Price --}}
        <p class="mt-4 text-blue-600 font-bold text-2xl">
            Rp {{ number_format($motor->harga_motor, 0, ',', '.') }}
        </p>

        {{-- Details --}}
        <div class="mt-4 space-y-2 text-gray-700">
            <p><strong>Tahun:</strong> {{ $motor->tahun_motor }}</p>
            <p><strong>Jarak Tempuh:</strong> {{ number_format($motor->km_motor, 0, ',', '.') }} km</p>
        </div>

        {{-- Action Buttons --}}
        <div class="mt-6 flex flex-wrap gap-3 justify-center">
            {{-- WhatsApp Order --}}
            <a href="#" 
                class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                Order via Whatsapp
            </a>

            {{-- Edit --}}
            <a href="{{ route('motor.edit', $motor->id) }}" 
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Edit Data
            </a>

            {{-- Delete --}}
            <form action="{{ route('motor.destroy', $motor->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
