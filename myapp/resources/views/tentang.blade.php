<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang Kami - Bengkel Mobil Tri Dharma Motor</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
    .brand-gradient { background: linear-gradient(135deg, #fde047, #ef4444, #3b82f6); }
    .icon-badge {
      background: linear-gradient(135deg, #fde047, #ef4444);
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .nav-link { position: relative; transition: color 0.3s ease; }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(to right, #fde047, #ef4444, #3b82f6);
      transition: width 0.3s ease;
    }
    .nav-link:hover::after { width: 100%; }
    .active-link { color: #2563eb; font-weight: 700; }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">

  <header class="bg-white shadow-md">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between p-4">
      <div class="flex items-center space-x-3">
        <div class="w-12 h-12 rounded-full icon-badge flex items-center justify-center">
          <i class="fas fa-car text-white text-xl"></i>
        </div>
        <div>
          <h1 class="text-xl font-bold text-gray-900">Bengkel Mobil Tri Darma Motor</h1>
          <p class="text-sm text-gray-600">Servis Profesional & Terpercaya Sejak 2007</p>
        </div>
      </div>
      <div class="flex space-x-4 mt-3 md:mt-0">
        <a href="https://wa.me/6285242692252" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-green-600 transition">
          <i class="fab fa-whatsapp text-lg"></i> WhatsApp
        </a>
      </div>
    </div>
  </header>

  <nav class="bg-white sticky top-0 z-50 shadow-sm">
    <div class="max-w-5xl mx-auto flex justify-center space-x-8 py-3 font-semibold text-gray-700">
      <a href="/" class="nav-link hover:text-blue-600">Beranda</a>
      <a href="/layanan" class="nav-link hover:text-blue-600">Layanan</a>
      <a href="/tentang" class="nav-link active-link">Tentang Kami</a>
    </div>
  </nav>

  <section class="brand-gradient text-center py-20 px-6 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
      <i class="fas fa-cogs text-[200px] absolute -top-10 -left-10 text-white"></i>
      <i class="fas fa-car-side text-[150px] absolute bottom-0 right-0 text-white"></i>
    </div>
    <div class="relative z-10">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Tentang Bengkel Mobil Tri Dharma Motor</h2>
      <p class="text-lg mb-6 max-w-2xl mx-auto">
        Didirikan sejak 2007 — kami berdedikasi untuk memberikan pelayanan terbaik dalam perawatan dan perbaikan kendaraan Anda.
      </p>
    </div>
  </section>

  <section class="py-16 px-6 bg-gray-100">
    <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Mengapa Memilih Kami?</h2>
    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
      <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition transform hover:-translate-y-1 text-center">
        <i class="fas fa-history text-red-500 text-4xl mb-4"></i>
        <h3 class="font-semibold text-lg mb-2">Berpengalaman Sejak 2007</h3>
        <p class="text-gray-600">Lebih dari 15 tahun melayani pelanggan dengan profesionalisme dan kualitas terbaik.</p>
      </div>

      <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition transform hover:-translate-y-1 text-center">
        <i class="fas fa-user-cog text-blue-500 text-4xl mb-4"></i>
        <h3 class="font-semibold text-lg mb-2">Teknisi Profesional</h3>
        <p class="text-gray-600">Tim mekanik ahli dengan pengalaman lebih dari 30 tahun di dunia otomotif.</p>
      </div>

      <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition transform hover:-translate-y-1 text-center">
        <i class="fas fa-wallet text-yellow-500 text-4xl mb-4"></i>
        <h3 class="font-semibold text-lg mb-2">Harga Terjangkau</h3>
        <p class="text-gray-600">Harga bersahabat tanpa mengorbankan kualitas dan ketelitian servis.</p>
      </div>
    </div>
  </section>

  <section class="py-16 px-6">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6 text-gray-900">Sejarah Kami</h2>
      <p class="text-gray-700 leading-relaxed max-w-3xl mx-auto">
        <strong>Bengkel Mobil Tri Darma Motor</strong> berdiri pada tahun <strong>2007</strong> di Makassar, dimulai dari bengkel kecil dengan dua teknisi berpengalaman. 
        Seiring waktu dan kepercayaan pelanggan, kami berkembang menjadi bengkel yang dikenal karena <em>pelayanan cepat, transparan, dan berkualitas</em>.  
        Dengan semangat melayani, kami terus meningkatkan fasilitas, pelatihan mekanik, dan layanan pelanggan demi memberikan pengalaman servis terbaik.
      </p>
    </div>
  </section>

  <footer class="bg-gray-900 text-gray-300 py-8">
    <div class="max-w-6xl mx-auto text-center">
      <p>&copy; 2025 <span class="font-semibold text-white">Bengkel Mobil Tri Dharma Motor</span> — Servis Mobil Terpercaya</p>
    </div>
  </footer>

  <script>
    $(document).ready(function(){
      $("body").hide().fadeIn(800);

      $(".bg-white").hover(
        function(){ $(this).find("i").animate({fontSize: "45px"}, 200); },
        function(){ $(this).find("i").animate({fontSize: "40px"}, 200); }
      );
    });
  </script>
</body>
</html>
