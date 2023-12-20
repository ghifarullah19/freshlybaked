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

    @if (!empty($cart) || !empty($cart_details))
  <div class="block text-black text-center font-semibold">
    Tabel Cart
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
              <th scope="col" class="px-6 py-3 text-white">
                  Action
              </th>
          </tr>
          </thead>

          <tbody>
              {{-- {{ dd($carts->id) }} --}}
              @foreach ($cart_details as $cart)
              <tr class="odd:bg-white odd:dark:bg-amber-50 even:bg-gray-50 even:dark:bg-gray-300 dark:border-gray-700 border-b-2">
                  {{-- Isi Tabel No --}}
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $loop->iteration }}
                  </th>
                  {{-- Isi Tabel Name --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $cart->menu->name }}
                  </td>
                  {{-- Isi Tabel Categories --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $cart->quantity }}
                  </td>
                  {{-- Isi Tabel Price --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Rp.{{ $cart->menu->price }}
                  </td>
                  {{-- Isi Tabel Price --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      Rp.{{ $cart->total_price }}
                  </td>
                  {{-- Isi Tabel Button --}}
                  <td class="px-6 flex">
                      <form action="/checkout/{{ $cart->id }}" method="POST">
                          @csrf
                          @method('delete')
                          <button onclick="confirmation('Apakah anda yakin ingin menghapus pesanan?')" type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                      </form>
                  </td>
                </tr>
          @endforeach
        </tbody>
    </table>
</div>
<div class="flex flex-row justify-end pt-2 pe-9">
    <form action="/confirm-checkout" method="POST">
        @csrf
        <button onclick="confirmation('Apakah anda yakin ingin checkout pesanan?')" type="submit" class="text-white bg-green-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Check Out Dong</button>
    </form>
</div>
@else
    <div class="flex justify-center align-middle"><h1>Kosong Bro</h1></div>
@endif
</section>

@endsection