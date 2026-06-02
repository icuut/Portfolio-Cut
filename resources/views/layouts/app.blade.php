<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} | Portfolio</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    </head>
<body class="bg-gray-50 text-gray-900 selection:bg-[#7A0016] selection:text-white">

    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-[#7A0016] text-white border-b-4 border-white py-4 px-6 md:px-12 flex justify-between items-center shadow-lg">
        <a href="#" class="text-xl font-black tracking-tighter">PORTFOLIO.</a>
        <div class="space-x-6 font-bold text-sm uppercase tracking-wider">
            <a href="#about" class="hover:text-gray-300 transition">Tentang</a>
            <a href="#projects" class="hover:text-gray-300 transition">Proyek</a>
            <a href="#org" class="hover:text-gray-300 transition">Organisasi</a>
            <a href="#contact" class="hover:text-gray-300 transition">Kontak</a>
        </div>
    </nav>

    <!-- Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-zinc-900 text-white text-center py-8 border-t-8 border-[#7A0016]">
        <p class="text-sm font-bold uppercase tracking-widest">© 2026 {{ $profile['name'] }} — Teknik Informatika</p>
    </footer>

</body>
</html> 