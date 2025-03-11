<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Rental Sepeda</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-blue-600 sticky top-0 z-50">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center p-4">
                <div class="text-white text-3xl font-bold tracking-wider mb-4 md:mb-0">
                    <h1 class="hover:text-emerald-300 transition-all duration-300 transform hover:scale-105">
                        RENTAL SEPEDA
                    </h1>
                </div>

                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#home" class="text-white text-lg relative group">
                        <span class="hover:text-emerald-300 transition duration-300">Beranda</span>
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-emerald-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#about" class="text-white text-lg relative group">
                        <span class="hover:text-emerald-300 transition duration-300">Tentang</span>
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-emerald-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#sepeda" class="text-white text-lg relative group">
                        <span class="hover:text-emerald-300 transition duration-300">Sepeda</span>
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-emerald-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#contact" class="text-white text-lg relative group">
                        <span class="hover:text-emerald-300 transition duration-300">Kontak</span>
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-emerald-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                </div>

                <!-- Search Box -->
                <form id="searchForm" class="relative">
                    <input type="search" id="searchInput" placeholder="Cari..." class="px-4 py-2 rounded-full text-black focus:outline-none">
                    <button type="submit" class="absolute right-0 top-0 mt-2 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Home -->
    <section id="home" class="relative h-screen">
        <div class="absolute inset-0" style="background-image: url('{{ asset('images/awan.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;"></div>
        <div class="relative flex items-center justify-center h-full px-4">
            <div class="backdrop-blur-md bg-black/20 p-8 md:p-12 rounded-2xl border border-white/20 transform hover:scale-105 transition duration-500 max-w-3xl mx-4">
                <h1 class="font-bold text-4xl md:text-4xl mb-4 text-white text-center leading-tight">SIAP KAN DIRI ANDA UNTUK PETUALANGGAN SERU</h1>
                <p class="text-lg md:text-xl text-gray-100 mt-6 text-center">Temukan kebebasan berkendara dengan koleksi sepeda berkualitas kami. Siap menemani setiap perjalanan Anda.</p>
                <div class="text-center  mt-8">
                    <a href="#sepeda" class="bg-blue-600 hover:bg-blue-700 text-white rounded-full px-8 py-3 inline-block transition duration-300 transform hover:scale-105 font-semibold shadow-lg">
                        LIHAT KOLEKSI SEPEDA
                    </a>
                </div>
            </div>
        </div>
    </section>  

    <!-- Tentang -->
    <section id="about" class="py-24 bg-gradient-to-b from-emerald-50 to-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-black mb-8">MENGAPA MEMILIH KAMI?</h2>
            <p class="mt-4 text-center text-gray-700 text-lg max-w-3xl mx-auto">Kami hadir untuk memberikan pengalaman bersepeda terbaik dengan layanan premium dan sepeda berkualitas untuk setiap pelanggan.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
                <div class="flex flex-col md:flex-row items-center bg-white shadow-xl rounded-xl p-8 transform hover:scale-105 transition duration-300 border border-emerald-100 hover:border-emerald-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <img src="{{ asset('images/1.jpg') }}" alt="Sepeda Premium" class="rounded-xl">
                    </div>
                    <div class="md:w-1/2 text-center md:text-left md:pl-8">
                        <h3 class="text-3xl font-semibold text-black">Sepeda Premium</h3>
                        <p class="mt-4 text-gray-600">Koleksi sepeda berkualitas tinggi yang terawat dengan baik untuk kenyamanan berkendara maksimal.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center bg-white shadow-xl rounded-xl p-8 transform hover:scale-105 transition duration-300 border border-emerald-100 hover:border-emerald-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <img src="{{ asset('images/2.jpg') }}" alt="Harga Bersahabat" class="rounded-xl">
                    </div>
                    <div class="md:w-1/2 text-center md:text-left md:pl-8">
                        <h3 class="text-3xl font-semibold text-black">Harga Bersahabat</h3>
                        <p class="mt-4 text-gray-600">Nikmati pengalaman bersepeda premium dengan harga yang terjangkau dan kompetitif.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center bg-white shadow-xl rounded-xl p-8 transform hover:scale-105 transition duration-300 border border-emerald-100 hover:border-emerald-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <img src="{{ asset('images/3.jpg') }}" alt="Layanan 24 Jam" class="rounded-xl">
                    </div>
                    <div class="md:w-1/2 text-center md:text-left md:pl-8">
                        <h3 class="text-3xl font-semibold text-black">Layanan 24 Jam</h3>
                        <p class="mt-4 text-gray-600">Tim kami siap membantu Anda kapanpun, memberikan dukungan penuh 24/7.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center bg-white shadow-xl rounded-xl p-8 transform hover:scale-105 transition duration-300 border border-emerald-100 hover:border-emerald-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <img src="{{ asset('images/4.jpg') }}" alt="Perawatan Gratis" class="rounded-xl">
                    </div>
                    <div class="md:w-1/2 text-center md:text-left md:pl-8">
                        <h3 class="text-3xl font-semibold text-black">Perawatan Gratis</h3>
                        <p class="mt-4 text-gray-600">Dapatkan layanan pemeliharaan gratis untuk menjamin performa optimal sepeda Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sepeda -->
    <section id="sepeda" class="bg-gradient-to-b from-emerald-50 to-white py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-black mb-12">KOLEKSI SEPEDA</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                @foreach ($sepeda as $item)
                    <div class="bg-white shadow-xl rounded-2xl p-6 text-center transform hover:scale-105 transition duration-300 border border-emerald-100">
                        <img src="{{ asset($item->foto) }}" alt="{{ $item->merk }}" class="h-100 w-full object-contain rounded-xl mb-4">
                        <h3 class="text-2xl font-semibold mt-4 text-emerald-800">{{ $item->merk }}</h3>
                        <div class="space-y-2 mt-4">
                            <p class="text-gray-600">Tipe: <span class="text-emerald-700 font-medium">{{ $item->tipe }}</span></p>
                            <p class="text-gray-600">Warna: <span class="text-emerald-700 font-medium">{{ $item->warna }}</span></p>
                            <p class="text-2xl font-bold text-emerald-600 mt-4">Rp. {{ number_format($item->sewa, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Kontak -->     
    <section id="contact" class="py-24 bg-blue-600 to-teal-700">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-white mb-12">KONTAK</h2>
            <div class="mt-8 max-w-3xl mx-auto">
                <div class="bg-white/10 backdrop-blur-md p-10 rounded-2xl shadow-2xl border border-white/20">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="text-center md:text-left space-y-6">
                            <div class="group">
                                <h3 class="text-xl font-semibold text-white mb-2">Telepon</h3>
                                <a href="tel:+6282217285909" class="text-white text-lg hover:text-emerald-300 transition duration-300 flex items-center justify-center md:justify-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    +62 81234567890
                                </a>
                            </div>
                            <div class="group">
                                <h3 class="text-xl font-semibold text-white mb-2">Email</h3>
                                <a href="mailto:rentalsepeda@gmail.com" class="text-white text-lg hover:text-emerald-300 transition duration-300 flex items-center justify-center md:justify-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    oasisbicycle@gmail.com
                                </a>
                            </div>
                        </div>
                        <div class="text-center md:text-left">
                            <h3 class="text-xl font-semibold text-white mb-2">Alamat</h3>
                            <div class="text-white text-lg flex items-center justify-center md:justify-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Jl. Raya No. 123, Pariaman, Indonesia
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative bg-gradient-to-r from-emerald-900 to-teal-900 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center space-y-4">
                <div class="flex space-x-6">
                </div>
                <p class="text-gray-300">© 2025 Rental Country | Solusi Terbaik untuk Perjalanan Anda</p>
            </div>
        </div>
        <div class="absolute inset-0 flex justify-between items-center pointer-events-none">
            <div class="w-0 h-0 border-t-[50px] border-t-transparent border-r-[50px] border-r-gray-900"></div>
            <div class="w-0 h-0 border-t-[50px] border-t-transparent border-l-[50px] border-l-gray-900"></div>
        </div>
    </footer>
    
    {{-- Search functionality --}}
    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const query = document.getElementById('searchInput').value.toLowerCase();
            const sepedaSection = document.getElementById('sepeda');
            const items = sepedaSection.querySelectorAll('.bg-white');

            items.forEach(item => {
                const merk = item.querySelector('h3').textContent.toLowerCase();
                const tipe = item.querySelector('p:nth-child(2) span').textContent.toLowerCase();
                const warna = item.querySelector('p:nth-child(3) span').textContent.toLowerCase();

                if (merk.includes(query) || tipe.includes(query) || warna.includes(query)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            window.location.href = '#sepeda';
        });
    </script>
</body>
</html>