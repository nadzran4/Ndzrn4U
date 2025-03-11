<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>LOGIN</title>
</head>

<body class="bg-white">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 shadow-lg">
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-black mb-6">LOGIN</h1>
                </div>

                <div class="mt-8">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div>
                            <label for="login" class="block mb-2 text-sm text-gray-700 font-medium">Name/Email</label>
                            <input type="text" name="login" id="login" placeholder="Username/Email Anda"
                                value="{{ old('login') }}" required
                                class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-300 focus:border-emerald-500 focus:outline-none focus:ring focus:ring-emerald-500 focus:ring-opacity-40" />
                            @error('login')
                                <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-700 font-medium">Password</label>
                                <a href="#"
                                    class="text-sm text-blue hover:underline">Forgot
                                    password?</a>
                            </div>

                            <input type="password" name="password" id="password" placeholder="Password Anda" required
                                class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-300 focus:border-emerald-500 focus:outline-none focus:ring focus:ring-emerald-500 focus:ring-opacity-40" />
                            @error('password')
                                <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <button
                                class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 bg-blue-600 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-opacity-50">
                                Sign in
                            </button>
                        </div>
                    </form>

                    <p class="mt-6 text-sm text-center text-gray-600">
                        Belum Punya Akun?
                        <a href="{{ route('register') }}"
                            class="text-blue-600 hover:text-emerald-500 hover:underline">
                            Buat Akun Sekarang
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>