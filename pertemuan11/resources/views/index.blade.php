@extends('layouts.app')
@section('title', 'Beranda - Bengkel Mobil Tri Dharma Motor')

@section('content')

<section class="brand-gradient text-center py-24 px-6 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <i class="fas fa-tools text-[200px] absolute -top-10 -left-10 text-white"></i>
        <i class="fas fa-car-side text-[160px] absolute bottom-0 right-0 text-white"></i>
    </div>

    <div class="relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Servis Mobil Terpercaya di Makassar</h2>
        <p class="text-lg mb-6 max-w-2xl mx-auto">
            Perawatan, perbaikan, dan diagnosa mobil — cepat, profesional, dan transparan.
        </p>

        <a href="/layanan" class="bg-white text-gray-900 px-6 py-3 rounded-lg font-semibold shadow hover:scale-105 transition">
            <i class="fas fa-wrench mr-2 text-blue-600"></i> Lihat Layanan
        </a>
    </div>
</section>

<section class="py-16 px-6 bg-gray-100">
    <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Keunggulan Kami</h2>

    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="bg-white p-8 rounded-xl shadow-md text-center hover:shadow-xl transition">
            <i class="fas fa-user-cog text-blue-500 text-4xl mb-4"></i>
            <h3 class="font-semibold text-lg mb-2">Teknisi Berpengalaman</h3>
            <p class="text-gray-600">Ditangani oleh mekanik profesional dengan pengalaman 30+ tahun.</p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-md text-center hover:shadow-xl transition">
            <i class="fas fa-clock text-red-500 text-4xl mb-4"></i>
            <h3 class="font-semibold text-lg mb-2">Pengerjaan Cepat</h3>
            <p class="text-gray-600">Proses servis cepat tanpa mengurangi kualitas kerja.</p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-md text-center hover:shadow-xl transition">
            <i class="fas fa-tags text-yellow-500 text-4xl mb-4"></i>
            <h3 class="font-semibold text-lg mb-2">Harga Terbaik</h3>
            <p class="text-gray-600">Harga bersahabat dan transparan tanpa biaya tersembunyi.</p>
        </div>
    </div>
</section>

@endsection
