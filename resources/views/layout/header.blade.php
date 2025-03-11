<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>WEBSITE RENTAL</title>
</head>
<body>
    <nav class="bg-gradient-to-r from-emerald-800 to-teal-600 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center p-4">
                <div class="text-white text-3xl font-bold tracking-wider md:mr-auto -ml-6">
                    <h1 class="hover:text-emerald-300 transition-all duration-300 transform hover:scale-105">
                        DATA RENTAL
                    </h1>
                </div>

                <div class="flex-1 flex justify-center">
                    <div class="flex items-center gap-8">
                        <a href="{{ route('dashboard') }}" class="text-white text-lg relative group">
                            <span class="hover:text-emerald-300 transition duration-300">Dashboard</span>
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-emerald-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="{{ route('pelanggan.index') }}" class="text-white text-lg relative group">
                            <span class="hover:text-emerald-300 transition duration-300">Pelanggan</span>
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-emerald-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="{{ route('sepeda.index') }}" class="text-white text-lg relative group">
                            <span class="hover:text-emerald-300 transition duration-300">Sepeda</span>
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-emerald-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="{{ route('transaksi.index') }}" class="text-white text-lg relative group">
                            <span class="hover:text-emerald-300 transition duration-300">Transaksi</span>
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-emerald-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                    </div>
                </div>

                <div class="flex items-center md:ml-auto">
                    <form action="{{ route('logout') }}" method="POST" class="inline-block">
                        @csrf
                        @method('POST')
                        <button class="text-white text-lg relative group">
                            <span class="hover:text-emerald-300 transition duration-300">Logout</span>
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-emerald-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    @yield('main')
</body>
</html>