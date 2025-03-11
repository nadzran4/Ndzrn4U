<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>REGISTER</title>
</head>

<body class="bg-white">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 shadow-lg">
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-black mb-6">REGISTER</h1>
                </div>

                <div class="mt-8">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block mb-2 text-sm text-gray-700 font-medium">Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-300 focus:border-emerald-500 focus:outline-none focus:ring focus:ring-emerald-500 focus:ring-opacity-40" />
                                @error('name')
                                    <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-700 font-medium">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-300 focus:border-emerald-500 focus:outline-none focus:ring focus:ring-emerald-500 focus:ring-opacity-40" />
                                @error('email')
                                    <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm text-gray-700 font-medium">Password</label>
                                <input type="password" name="password" id="password" required
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-300 focus:border-emerald-500 focus:outline-none focus:ring focus:ring-emerald-500 focus:ring-opacity-40" />
                                @error('password')
                                    <div class="error text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label for="password_confirmation"
                                    class="block mb-2 text-sm text-gray-700 font-medium">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" required
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-300 focus:border-emerald-500 focus:outline-none focus:ring focus:ring-emerald-500 focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 bg-blue-600 hover:from-emerald-700 hover:to-teal-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-opacity-50">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

                    <p class="mt-6 text-sm text-center text-gray-600">
                        Sudah Punya Akun?
                        <a href="{{ route('login') }}" class="text-blue-600 hover:text-emerald-500 hover:underline">
                            Masuk Disini
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>