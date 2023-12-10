@extends('layouts.main')

@section('container')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    {{-- H Gilang --}}
        <div class="container"><div class="bg-black flex items-center justify-center h-screen">
            <div class="text-center">
                <div class="relative inline-block mt-7">
                    <img data-aos="zoom-in" data-aos-duration="3000"  src="img/bg5.jpg" alt="Image" class="w-full h-auto">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center ">
                        <p class="text-5xl font-bold">Si Apih Freshly Baked</p>
                        <p class="text-2xl font-bold mt-1">Baking Private & Made By Order</p>
                    </div>
                </div>
            </div>
        </div>
    {{-- H Akhir Gilang --}}





    {{-- About v Gilang --}}
        <div class="py-16 bg-white mt-7">
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
            <div data-aos="zoom-in" data-aos-duration="2000" class="border border-black p-4 rounded-xl">
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

  {{-- Pop-Up Contact WhatsApp--}}
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="WhatsApp Number" href="https://api.whatsapp.com/send/?phone=6281322123045&text&type=phone_number&app_absent=0" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center w-full h-full rounded-full" src="img/wame.png"/>
            </a>
        </div>
        </div>
  {{-- Akhir --}}



  <script>
    AOS.init();
</script>
@endsection
