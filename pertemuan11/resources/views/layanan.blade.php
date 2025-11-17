@extends('layouts.app')
@section('title', 'Layanan - Bengkel Mobil Tri Dharma Motor')

@section('content')

<section class="brand-gradient text-center py-20 px-6 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
      <i class="fas fa-cogs text-[200px] absolute -top-10 -left-10"></i>
      <i class="fas fa-tools text-[150px] absolute bottom-0 right-0"></i>
    </div>

    <div class="relative z-10">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Layanan & Pemesanan Servis</h2>
      <p class="text-lg mb-6 max-w-2xl mx-auto">Pilih mode layanan di bawah ini untuk menanyakan harga atau membuat janji servis kendaraan Anda.</p>
      <a href="#form-section" class="bg-white text-gray-900 px-6 py-3 rounded-lg font-semibold shadow hover:scale-105 transition">
        <i class="fas fa-wrench mr-2 text-blue-600"></i> Mulai Sekarang
      </a>
    </div>
</section>

<section id="form-section" class="py-16 bg-gray-100">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-2">Form Pemesanan Servis</h2>
      <p class="text-center text-gray-600 mb-6 text-sm">Silakan pilih salah satu mode di bawah ini:</p>

      <div class="tab-container flex justify-center mb-8">
        <button id="tabHarga" class="tab-btn flex-1 px-6 py-3 font-semibold bg-gray-200 text-gray-800 border-r">
            <i class="fas fa-tags mr-2"></i> Menanyakan Harga
        </button>

        <button id="tabJanji" class="tab-btn flex-1 px-6 py-3 font-semibold bg-gray-200 text-gray-800">
            <i class="fas fa-calendar-check mr-2"></i> Janji Servis
        </button>
      </div>

      
      <div id="formHarga" class="space-y-4">
        <div><label class="font-semibold block mb-1">Merk Mobil</label><input type="text" class="w-full border p-2 rounded"></div>
        <div><label class="font-semibold block mb-1">Model Mobil</label><input type="text" class="w-full border p-2 rounded"></div>
        <div><label class="font-semibold block mb-1">Tahun Mobil</label><input type="number" class="w-full border p-2 rounded"></div>
        <div><label class="font-semibold block mb-1">Kerusakan / Komponen Diganti</label><input type="text" class="w-full border p-2 rounded"></div>
        <div><label class="font-semibold block mb-1">Catatan Tambahan</label><textarea class="w-full border p-2 rounded" rows="3"></textarea></div>

        <button id="btnKirimHarga" class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition flex items-center justify-center">
            <i class="fab fa-whatsapp text-xl mr-2"></i> Kirim ke WhatsApp
        </button>
      </div>

      
      <div id="formJanji" class="space-y-4 hidden">
        <div><label class="font-semibold block mb-1">Merk Mobil</label><input type="text" class="w-full border p-2 rounded"></div>
        <div><label class="font-semibold block mb-1">Model / Varian Mobil</label><input type="text" class="w-full border p-2 rounded"></div>
        <div><label class="font-semibold block mb-1">Tahun Mobil</label><input type="number" class="w-full border p-2 rounded"></div>
        <div><label class="font-semibold block mb-1">Keluhan</label><textarea class="w-full border p-2 rounded" rows="3"></textarea></div>
        <div><label class="font-semibold block mb-1">Tanggal</label><input type="text" class="w-full border p-2 rounded"></div>
        <div><label class="font-semibold block mb-1">Jam</label><input type="text" class="w-full border p-2 rounded"></div>

        <button id="btnKirimJanji" class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition flex items-center justify-center">
            <i class="fab fa-whatsapp text-xl mr-2"></i> Kirim ke WhatsApp
        </button>
      </div>
    </div>
</section>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const tabHarga = document.getElementById("tabHarga");
    const tabJanji = document.getElementById("tabJanji");

    const formHarga = document.getElementById("formHarga");
    const formJanji = document.getElementById("formJanji");

    tabHarga.classList.add("bg-blue-600", "text-white");

    tabHarga.addEventListener("click", () => {
        tabHarga.classList.add("bg-blue-600", "text-white");
        tabJanji.classList.remove("bg-blue-600", "text-white");

        formHarga.classList.remove("hidden");
        formJanji.classList.add("hidden");
    });

    tabJanji.addEventListener("click", () => {
        tabJanji.classList.add("bg-blue-600", "text-white");
        tabHarga.classList.remove("bg-blue-600", "text-white");

        formJanji.classList.remove("hidden");
        formHarga.classList.add("hidden");
    });
});
</script>

@endsection
