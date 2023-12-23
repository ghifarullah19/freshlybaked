@extends('layouts.main')

{{-- Midtrans --}}
<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="SB-Mid-client-RCH1hg9ZAdMK8XW_"></script>

@section('container')
{{-- New Version --}}
<section class="py-20 mt-20 overflow-hidden font-poppins sm:py-4"> 
    @if (session()->has('token'))
        <script>
            // window.snap.pay("{{ session('token') }}");
            window.snap.pay("{{ session('token') }}", {
                onSuccess: function(result){
                    /* You may add your own implementation here */
                    alert("payment success!"); console.log(result);
                },
                onPending: function(result){
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                },
                onError: function(result){
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                },
                onClose: function(){
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        </script>
    @endif

    <div class="flex flex-row justify-start pt-2 ps-9">
        <form action="/history" method="get">
            <button type="submit" class="text-white bg-green-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Riwayat Dong</button>
        </form>
    </div>

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
                  Status
              </th>
              <th scope="col" class="px-6 py-3 text-white">
                  Action
              </th>
          </tr>
          </thead>

          <tbody>
              {{-- {{ dd($carts->id) }} --}}
              @foreach ($cart_details as $detail)
              <tr class="odd:bg-white odd:dark:bg-amber-50 even:bg-gray-50 even:dark:bg-gray-300 dark:border-gray-700 border-b-2">
                  {{-- Isi Tabel No --}}
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $loop->iteration }}
                  </th>
                  {{-- Isi Tabel Name --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $detail->menu->name }}
                  </td>
                  {{-- Isi Tabel Categories --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $detail->quantity }}
                  </td>
                  {{-- Isi Tabel Price --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Rp.{{ $detail->menu->price }}
                  </td>
                  {{-- Isi Tabel Price --}}
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      Rp.{{ $detail->total_price }}
                  </td>
                  {{-- Isi Tabel Button --}}
                  <td class="px-6 flex">
                      <form action="/checkout/{{ $detail->id }}" method="POST">
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
        <form action="/confirm-checkout" method="get">
            <button type="submit" class="text-white bg-green-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Check Out Dong</button>
        </form>
    </div>
@else
    <div class="flex justify-center align-middle"><h1>Kosong Bro</h1></div>
@endif
</section>
@endsection