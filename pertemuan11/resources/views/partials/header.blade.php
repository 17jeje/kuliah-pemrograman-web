<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    * { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }

    .brand-gradient { 
      background: linear-gradient(135deg, #fde047, #ef4444, #3b82f6); 
    }

    .icon-badge {
      background: linear-gradient(135deg, #fde047, #ef4444);
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .nav-link {
      position: relative;
      transition: color 0.3s ease;
    }
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
  </style>
</head>

<body class="bg-gray-50 text-gray-800">

  <!-- HEADER -->
  <header class="bg-white shadow-md">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between p-4">
      <div class="flex items-center space-x-3">
        <div class="w-12 h-12 rounded-full icon-badge flex items-center justify-center">
          <i class="fas fa-car text-white text-xl"></i>
        </div>
        <div>
          <h1 class="text-xl font-bold text-gray-900">Bengkel Mobil Tri Dharma Motor</h1>
          <p class="text-sm text-gray-600">Servis Profesional & Terpercaya Sejak 2007</p>
        </div>
      </div>

      <div class="flex space-x-4 mt-3 md:mt-0">
        <a href="https://wa.me/6285242692252?text=Halo%20Bengkel%20Tri%20Darma%20Motor,%20saya%20ingin%20menanyakan%20layanan%20servis."
           target="_blank" 
           class="bg-green-500 text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-green-600 transition">
          <i class="fab fa-whatsapp text-lg"></i> WhatsApp
        </a>
      </div>
    </div>
  </header>

  <!-- NAVBAR -->
  <nav class="bg-white sticky top-0 z-50 shadow-sm">
    <div class="max-w-5xl mx-auto flex justify-center space-x-8 py-3 font-semibold text-gray-700">
      <a href="/" class="nav-link hover:text-blue-600 {{ Request::is('/') ? 'text-blue-600 font-bold' : '' }}">Beranda</a>
      <a href="/layanan" class="nav-link hover:text-blue-600 {{ Request::is('layanan') ? 'text-blue-600 font-bold' : '' }}">Layanan</a>
      <a href="/tentang" class="nav-link hover:text-blue-600 {{ Request::is('tentang') ? 'text-blue-600 font-bold' : '' }}">Tentang Kami</a>
    </div>
  </nav>
