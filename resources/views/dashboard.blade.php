@extends('layout.header')
@section('main')
    <div class="container mx-auto px-4 py-6">
        @if (Auth::check())
            <div class="bg-gradient-to-r from-emerald-600 to-teal-700 rounded-lg p-8 mb-8 text-white" style="background-image: url('images/awan.jpg'); background-size: cover; background-position: center;">
                <h1 class="text-4xl font-bold">
                    Dashboard
                </h1>
                <p class="text-emerald-100 mt-2">
                    Selamat datang, {{ auth::user()->name }} !
                </p>
            </div>
        @endif

        <!-- Tabel Transaksi -->
        <div class="bg-white rounded-lg shadow-sm">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-xl font-bold text-gray-800">Transaksi Terbaru</h2>
                <p class="text-sm text-gray-500 mt-1">Daftar transaksi yang tercatat dalam sistem</p>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-emerald-600 to-teal-700 text-white">
                            <th class="px-6 py-3 text-left text-sm font-semibold border border-gray-200">Pelanggan</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold border border-gray-200">Sepeda</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold border border-gray-200">Tanggal Sewa</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold border border-gray-200">Status</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold border border-gray-200">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($transaksi as $t)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-200">{{ $t->pelanggan->nama }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-200">{{ $t->sepeda->merk }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-200">{{ date('d/m/Y', strtotime($t->tanggalSewa)) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap border border-gray-200">
                                <span class="px-2 py-1 text-xs rounded-full 
                                {{ $t->status == 'LUNAS' ? 'bg-emerald-100 text-emerald-800' : 
                                    ($t->status == 'PROSES' ? 'bg-orange-100 text-orange-800' : 'bg-red-100 text-red-800') }}">
                                        {{ $t->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-200">
                                Rp {{ number_format($t->totalBiaya, 0, ',', '.') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection