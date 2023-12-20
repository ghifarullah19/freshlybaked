{{-- {{ dd($carts->id) }} --}}
@extends('layouts.main')

@section('container')

{{-- New Version --}}
<section class="py-20 mt-20 overflow-hidden font-poppins sm:py-4">
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
                  Nama
              </th>
              <th scope="col" class="px-6 py-3 text-white">
                  Tanggal
              </th>
              <th scope="col" class="px-6 py-3 text-white">
                  Status
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
              @foreach ($carts as $cart)
              <tr class="odd:bg-white odd:dark:bg-amber-50 even:bg-gray-50 even:dark:bg-gray-300 dark:border-gray-700 border-b-2">
                  {{-- Isi Tabel No --}}
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $loop->iteration }}
                  </th>
                  {{-- Isi Tabel Name --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $cart->user->name }}
                  </td>
                  {{-- Isi Tabel Categories --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $cart->date }}
                  </td>
                  {{-- Isi Tabel Price --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    @if ($cart->status == 0)
                    Belum Dibayar
                    @elseif ($cart->status == 1)
                    Sudah Dibayar
                    @endif
                  </td>
                  {{-- Isi Tabel Price --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      Rp.{{ $cart->total_price }}
                  </td>
                  {{-- Isi Tabel Button --}}
                  <td class="px-6 flex">
                      <form action="/cart/{{ $cart->id }}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                      </form>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
  </div>
</section>
<section class="py-20 mt-10 overflow-hidden font-poppins sm:py-4">
  <div class="block text-black text-center font-semibold">
    Tabel Cart Detail
  </div>
  <div class="flex overflow-x-auto shadow-md sm:rounded-lg mx-3">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
          <thead class="text-xs text-gray-700 uppercase bg-gray-800 ">
          <tr>
              <th scope="col" class="px-6 py-3 text-white">
                  No
              </th>
              <th scope="col" class="px-6 py-3 text-white">
                  Nama Produk
              </th>
              <th scope="col" class="px-6 py-3 text-white">
                  Kategori
              </th>
              <th scope="col" class="px-6 py-3 text-white">
                  Jumlah
              </th>
              <th scope="col" class="px-6 py-3 text-white">
                  Harga Satuan
              </th>
              <th scope="col" class="px-6 py-3 text-white">
                  Harga Total Per Produk
              </th>
              <th scope="col" class="px-6 py-3 text-white">
                  Action
              </th>
          </tr>
          </thead>

          <tbody>
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
                      {{ $cart->menu->category->name }}
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
                      Rp.{{ $cart->menu->price * $cart->quantity }}
                  </td>
                  {{-- Isi Tabel Button --}}
                  <td class="px-6 flex">
                      <form action="/cart/{{ $cart->id }}" method="get">
                          @csrf
                          @method('delete')
                          <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                      </form>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
  </div>
</section>

@endsection