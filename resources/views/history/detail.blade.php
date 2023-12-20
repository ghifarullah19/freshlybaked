@extends('layouts.main')

@section('container')
{{-- New Version --}}
<section class="py-20 mt-20 overflow-hidden font-poppins sm:py-4">
    @if (session()->has('success'))
        <div class="p-4 mb-4 text-sm bg-gray-800 text-green-400" role="alert">
            <span class="font-medium">Success!</span>
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
            <span class="font-medium">Error!</span>
            {{ session('error') }}
        </div>
    @endif

    <div class="flex flex-row justify-start pt-2 ps-9">
        <form action="/history" method="get">
            <button type="submit" class="text-white bg-green-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Riwayat Dong</button>
        </form>
    </div>

    @if (!empty($history) || !empty($history_details))
  <div class="block text-black text-center font-semibold">
    Tabel history
  </div>
  <div class="flex overflow-x-auto shadow-md sm:rounded-lg mx-3">
    
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
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
              {{-- {{ dd($historys->id) }} --}}
              @foreach ($history_details as $history)
              <tr class="odd:bg-white odd:dark:bg-amber-50 even:bg-gray-50 even:dark:bg-gray-300 dark:border-gray-700 border-b-2">
                  {{-- Isi Tabel No --}}
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $loop->iteration }}
                  </th>
                  {{-- Isi Tabel Name --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $history->menu->name }}
                  </td>
                  {{-- Isi Tabel Categories --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $history->quantity }}
                  </td>
                  {{-- Isi Tabel Price --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Rp.{{ $history->menu->price }}
                  </td>
                  {{-- Isi Tabel Price --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      Rp.{{ $history->total_price }}
                  </td>
                </tr>
          @endforeach
        </tbody>
    </table>
</div>

@else
    <div class="flex justify-center align-middle"><h1>Kosong Bro</h1></div>
@endif
</section>

@endsection