@extends('layouts.main')

@section('container')
{{-- New Version --}}
<section class="flex flex-col justify-center h-[360px] gap-5 overflow-hidden font-poppins sm:py-4"> 
    <div class="w-full">
    @if (!empty($history) || !empty($history_details))
        <div class="block text-black text-center font-semibold">
        Tabel history
        </div>
        <div class="container overflow-x-auto shadow-md sm:rounded-lg mx-auto">
            <table class="w-full rounded-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-800 ">
                <tr>
                    <th scope="col" class="px-6 py-3 text-white">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 text-white">
                        Nama Barang
                    </th>
                    <th scope="col" class="px-6 py-3 text-white">
                        Jumlah
                    </th>
                    <th scope="col" class="px-6 py-3 text-white">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3 text-white">
                        Harga Total
                    </th>
                </tr>
                </thead>

                <tbody>
                    {{-- {{ dd($histories->id) }} --}}
                    @foreach ($history_details as $history)
                    <tr class="odd:bg-white odd:dark:bg-amber-50 even:bg-gray-50 even:dark:bg-gray-300 dark:border-gray-700 border-b-2">
                        {{-- Isi Tabel No --}}
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $loop->iteration }}
                        </th>
                        {{-- Isi Tabel Categories --}}
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $history->menu->name }}
                        </td>
                        {{-- Isi Tabel Price --}}
                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                            {{ $history->quantity }}
                        </td>
                        {{-- Isi Tabel Price --}}
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Rp.{{ $history->price }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Rp.{{ $history->total_price }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="flex flex-col justify-center">
            <h1 class="text-center text-4xl font-bold">KOSONG</h1>
        </div>
    @endif
        <div class="container w-full mx-auto flex flex-row justify-end gap-2 pt-2">
            <form action="/history" method="get">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Riwayat</button>
            </form>
        </div>
    </div>
</section>
@endsection