@extends('layouts.main')

<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="SB-Mid-client-RCH1hg9ZAdMK8XW_"></script>

@section('container')

@if (session()->has('success'))
    <div class="p-4 mb-4 text-sm bg-gray-800 text-green-400" role="alert">
        <span class="font-medium">Success!</span>
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
        <span class="font-medium">Danger alert!</span>
        {{ session('error') }}
    </div>
@endif

<section>
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
  <h1 class="mb-10 text-center text-2xl font-bold pt-8">Cart Items</h1>
  {{-- Card Container (Looping) --}}
  <div class="flex flex-row mx-auto container w-full">
    <div class="flex flex-row flex-wrap w-full">
      @foreach ($cart_details as $detail)
      <div class="w-full items-center justify-center px-6 md:space-x-6 xl:px-0">
        {{-- Card Product --}}
        <div class="rounded-lg md:w-full">
          {{-- Image/Gambar --}}
          <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
            <img src="https://source.unsplash.com/350x220?{{ 'bakery'}}" alt="product-image" class="w-full rounded-lg sm:w-40"/>
            <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
              {{-- Nama Produk --}}
              <div class="mt-5 sm:mt-0">
                <h2 class="text-lg font-bold text-gray-900">{{ $detail->menu->name }}</h2>
                {{-- Category --}}
                <p class="mt-1 text-xs text-gray-700">{{ $detail->menu->category->name }}</p>
                <div class="mt-3 flex items-center border-gray-100">
                  <form action="/cart/ubah/{{ $detail->id }}" class="flex" method="post">
                    @csrf
                    <button type="submit" id="decrement-button" data-input-counter-decrement="quantity-input{{ $detail->id }}" class="bg-gray-100 dark:bg-white dark:hover:bg-gray-400 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-10 focus:ring-gray-100 dark:focus:ring-white focus:ring-2 focus:outline-none">
                      <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                      </svg>
                    </button>
                    <input type="text" name="quantity" id="quantity-input{{ $detail->id }}" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-10 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-10 py-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="{{ $detail->quantity }}" data-input-counter-max="{{ $detail->menu->quantity }}" data-input-counter-min="1">
                    <button type="submit" id="increment-button" data-input-counter-increment="quantity-input{{ $detail->id }}" class="bg-gray-100 dark:bg-white dark:hover:bg-gray-400 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-10 focus:ring-gray-100 dark:focus:ring-white focus:ring-2 focus:outline-none">
                      <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
              {{-- Control Button --}}
              <div class="mt-4 flex sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                {{-- Price/Harga --}}
                <div class="flex flex-col justify-around align-bottom h-full">
                  <div class="flex flex-row justify-end">
                    <form action="/cart/{{ $detail->id }}" method="post">
                      @method('delete')
                      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                      <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </button>
                    </form>
                  </div>
                  <p class="text-md">Rp. {{ $detail->price * $detail->quantity }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Sub total -->
    @if ($cart != null)
      <div class="flex flex-col w-[70%]">
        <div class="flex w-full items-center justify-center pb-10">
          <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 w-full">
            <div class="mb-2 flex justify-between">
              <p class="text-gray-700">Subtotal</p>
              <p class="text-gray-700">Rp. {{ $cart->total_price }}</p>
            </div>
            <div class="flex justify-between">
              <p class="text-gray-700">Shipping</p>
              <p class="text-gray-700">Rp. 10.000</p>
            </div>
            <hr class="my-4" />
            <div class="flex justify-between">
              <p class="text-lg font-bold">Total</p>
              <div class="">
                <p class="mb-1 text-lg font-bold">Rp. {{ $cart->total_price + 10000 }}</p>
                <p class="text-sm text-gray-700">Termasuk pajak</p>
              </div>
            </div>
            <form action="/confirm-checkout" method="get">
              <button type="submit" class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button>
            </form>
          </div>
        </div>
      </div>
    @else
      <div class="flex flex-col justify-center">
        <h1 class="text-center text-3xl font-bold">Keranjang masih kosong</h1>
      </div>
    @endif
  </div>
</section>

@endsection