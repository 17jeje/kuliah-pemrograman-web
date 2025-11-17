@extends('layouts.app')
@section('title', 'Tentang Kami - Bengkel Mobil Tri Dharma Motor')

@section('content')

<section class="brand-gradient text-center py-20 px-6 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <i class="fas fa-cogs text-[200px] absolute -top-10 -left-10"></i>
        <i class="fas fa-car-side text-[150px] absolute bottom-0 right-0"></i>
    </div>

    <div class="relative z-10">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Tentang Bengkel Mobil Tri Dharma Motor</h2>
      <p class="text-lg mb-6 max-w-2xl mx-auto">
        Didirikan sejak 2007 — kami berdedikasi memberikan pelayanan terbaik untuk kendaraan Anda.
      </p>
    </div>
</section>

<section class="py-16 px-6 bg-gray-100">
    <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Mengapa Memilih Kami?</h2>

    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
      <div class="bg-white p-8 rounded-xl shadow text-center hover:shadow-xl transition">
        <i class="fas fa-history text-red-500 text-4xl mb-4"></i>
        <h3 class="font-semibold text-lg mb-2">Berpengalaman Sejak 2007</h3>
        <p class="text-gray-600">Lebih dari 15 tahun melayani dengan profesional.</p>
      </div>

      <div class="bg-white p-8 rounded-xl shadow text-center hover:shadow-xl transition">
        <i class="fas fa-user-cog text-blue-500 text-4xl mb-4"></i>
        <h3 class="font-semibold text-lg mb-2">Teknisi Profesional</h3>
        <p class="text-gray-600">Mekanik ahli dengan pengalaman puluhan tahun.</p>
      </div>

      <div class="bg-white p-8 rounded-xl shadow text-center hover:shadow-xl transition">
        <i class="fas fa-wallet text-yellow-500 text-4xl mb-4"></i>
        <h3 class="font-semibold text-lg mb-2">Harga Terjangkau</h3>
        <p class="text-gray-600">Harga merakyat tanpa mengorbankan kualitas.</p>
      </div>
    </div>
</section>

<section class="py-16 px-6">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6 text-gray-900">Sejarah Kami</h2>
      <p class="text-gray-700 leading-relaxed max-w-3xl mx-auto">
        <strong>Bengkel Mobil Tri Dharma Motor</strong> berdiri pada tahun <strong>2007</strong> di Makassar.  
        Berawal dari bengkel kecil dengan dua teknisi berpengalaman, kini berkembang menjadi bengkel terpercaya 
        berkat pelayanan cepat, transparan, dan berkualitas.
      </p>
    </div>
</section>

@endsection
