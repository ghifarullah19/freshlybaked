@extends('layouts.main')

{{-- Midtrans --}}
<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="SB-Mid-client-RCH1hg9ZAdMK8XW_"></script>

@section('container')
{{-- New Version --}}
<section class="flex flex-col justify-center h-[360px] gap-5 overflow-hidden font-poppins sm:py-4">
    {{-- Midtrans snap --}}
    @if (session()->has('token'))
        <script>
            window.snap.pay("{{ session('token') }}", {
                // Condition success
                onSuccess: function(result){
                    /* You may add your own implementation here */
                    alert("payment success! website will reloaded."); console.log(result);
                    const response = fetch('/updateDataPayment', {
                        method: 'get',
                    });
                    console.log(response);

                    setTimeout(() => {
                        window.location.reload(true);
                    }, 1500);
                },
                // Condition pending
                onPending: function(result){
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                },
                // Condition error
                onError: function(result){
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                },
                // Condition close
                onClose: function(){
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        </script>
    @endif

    <div class="w-full">
    @if (!empty($cart) || !empty($cart_details))
        <div class="block text-black text-center font-semibold">
        Tabel Cart
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
                    <th scope="col" class="px-6 py-3 text-white">
                        Action
                    </th>
                </tr>
                </thead>

                <tbody>
                    {{-- {{ dd($histories->id) }} --}}
                    @foreach ($cart_details as $cart)
                    <tr class="odd:bg-white odd:dark:bg-amber-50 even:bg-gray-50 even:dark:bg-gray-300 dark:border-gray-700 border-b-2">
                        {{-- Isi Tabel No --}}
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $loop->iteration }}
                        </th>
                        {{-- Isi Tabel Categories --}}
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $cart->menu->name }}
                        </td>
                        {{-- Isi Tabel Price --}}
                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                            {{ $cart->quantity }}
                        </td>
                        {{-- Isi Tabel Price --}}
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Rp.{{ $cart->price }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Rp.{{ $cart->total_price }}
                        </td>
                        {{-- Isi Tabel Button --}}
                        <td class="px-6 py-3 flex font-medium whitespace-nowrap">
                            <form action="/checkout/{{ $cart->id }}" method="post">
                                @method('delete')
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                            </form>
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
            <form action="/confirm-checkout" method="get">
                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Check Out</button>
            </form>
        </div>
    </div>
</section>
@endsection
