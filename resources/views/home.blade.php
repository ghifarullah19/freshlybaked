@extends('layouts.main')

@section('container')

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


{{-- Header fauzi --}}
<section class="relative bg-[url(/img/bg.jpg)] bg-cover bg-center bg-no-repeat">
  <div
    class="absolute inset-0 bg-white/60 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"></div>
  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8 justify-center">
    <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
      <h1 class="text-3xl font-extrabold sm:text-5xl text-black sm:text-white">
        Si Apih Freshly Baked
        <strong class="block font-extrabold text-black sm:text-white text-xl">
          Baking Private & Made by Order
        </strong>
      </h1>
      </div>
    </div>
  </div>
</section>
{{-- Akhir Header Fauzi --}}

{{-- About v Gilang --}}

<div class="py-16 bg-white mt-8">
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
        <div data-aos="fade-right" data-aos-duration="2000" class="md:5/12 lg:w-5/12">
            <img class="rounded-xl" src="img/logo1.jpg" alt="image" width="500" >
        </div>
        <div class="md:7/12 lg:w-6/12">
            <h2 data-aos="fade-up" data-aos-duration="2000" class="text-2xl text-gray-900 font-bold md:text-4xl">About Us</h2>
            <p data-aos="fade-up" data-aos-duration="2000" class="mt-6 text-gray-700">Halo! FreshlyBaked Adalah Sebuah Toko Yang Menjual Berbagi Macam Kue. Didirikan pada tahun 2017, Freshly Baked by Origin Bakery didirikan karena kami melihat potensi pertumbuhan industri roti di Indonesia melalui perubahan gaya hidup. Namun, saat ini pilihan roti yang lebih sehat sangat sedikit dan kemungkinan besar harganya mahal.</p>
            <p data-aos="fade-up" data-aos-duration="2000" class="mt-4 text-gray-700">Alamat kami berada di Jl. Sariwangi Dalam 28 Blok 23/64 Kota Bandung.</p>
        </div>
        </div>
    </div>
</div>

{{-- Akhir About v Gilang --}}



    {{-- Awal Highlight Produk --}}
    <div class="container mx-auto mt-8" id="highlight" style="padding-top: 70px;">
      <h1  class="font-bold text-2xl text-center">______ Highlight ______</h1>
      <div class="mt-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 mx-5 md:mx-0">
        @foreach ($menus as $menu)
        <div data-aos="flip-right" data-aos-duration="2000" class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img src="/img/1.jpg" alt="">
          </div>
          <div class="mt-3">
            <p class="font-light text-black text-base">{{ $menu->category }}</p>
            <p class="font-light text-2xl">{{ $menu->name }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  {{-- Akhir Highlight --}}

  <script>
    AOS.init();
</script>
@endsection
