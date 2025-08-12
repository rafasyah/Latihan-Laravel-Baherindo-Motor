
@extends('layout.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
 <div class="flex justify-center">
 <a href="{{ route('mobil.create') }}" 
       class="text-white bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-700 transition">
       new data
    </a>
  </div>

 <h1 class="text-[40px] text-center font-bold p-5">Welcome to Baherindo Motor</h1>
    <p class="text-center">Jual Beli Motor/Mobil second termurah di Bekasi</p>
<div class="page-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
    @foreach($mobil as $mo)
    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
     <img src="{{ asset('storage/' . $mo->gambar_mobil) }}" 
     alt="{{ $mo->nama_mobil }}" 
     class="w-full h-48 object-cover rounded-t-2xl">




        <div class="p-6">
            <h2 class="text-xl font-semibold text-gray-800 truncate">{{ $mo->nama_mobil }}</h2>
            <div class="mt-4 flex items-center justify-between">
                <span class="text-blue-600 font-bold text-lg">Rp {{ number_format($mo->harga_mobil, 0, ',', '.') }}</span>
                  <span class="text-blue-600 font-bold text-lg">Rp {{ number_format($mo->km_mobil, 0, ',', '.') }}</span>
          <a href="{{ route('mobil.show', $mo->id) }}" class="text-white bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-700 transition">Edit</a>
            </div>
        </div>
    </div>
    @endforeach
</div>



      
    </div>
</div>
      <div class="flex justify-center">
    <a href="home" 
       class="text-white bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-700 transition">
        Untuk motor
    </a>
</div>
@endsection

