@extends('layouts.main')

@section('container')

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

{{-- Awal About --}}
<section class="about">
<div class="about-container mx-auto mt-10 w-[57%]">
  <h1 class="font-bold text-2xl text-center">______ About ______</h1>
  <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-5 mx-5 md:mx-0">
    <div class="">
      <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
        <img src="/img/siapih1.jpg" alt="">
      </div>
      <div class="mt-3">
        <p class="font-light text-black text-base"> Founder dari Si Apih Freshly Baked. Lahir pada tanggal 4
          Oktober 1976 di Sumendang. Akrab dipanggil Si Apih ini
          merupakan koki yang berpengalaman. Dia pernah bekerja di Dubai
          selama beberapa tahun dan menjadi Chef Pastry di beberapa
          hotel ternama di Bandung. Setelah tidak melanjutkan kontraknya
          di Hotel Holiday Inn Pasteur, kini Si Apih fokus kepada
          usahanya.
        </p>
      </div>
    </div>
    <div>
      <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
        <img src="/img/logo.jpg" alt="">
      </div>
      <div class="mt-3">
        <p class="font-light text-black text-base">Alamat kami berada di Jl. Sariwangi Dalam 28 Blok 23/64 Kota Bandung. Si Apih Freshly Backed dikelola bersama istrinya. Saat ini hanya menerima pesenan melalui pre-order. Kedepannya Si Apih Freshly Backed akan bersaing dengan toko kue ternama lainnya.</p>
      </div>
    </div>
  </section>
  {{-- Akhir About --}}
    
    {{-- Awal Highlight Produk --}}
    <div class="container mx-auto mt-8">
      <h1 class="font-bold text-2xl text-center">______ Highlight ______</h1>
      <div class="mt-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 mx-5 md:mx-0">
        <div class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img src="/img/1.jpg" alt="">
          </div>
          <div class="mt-3">
            <p class="font-light text-black text-base">Cake</p>
            <p class="font-light text-2xl">Kue Black Forest</p>
          </div>
        </div>
        

        <div class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img src="/img/2.jpg" alt="">
          </div>
          <div class="mt-3">
            <p class="font-light text-black text-base">Cake</p>
            <p class="font-light text-2xl">Kue Peju</p>
          </div>
        </div>

        <div class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img src="/img/3.jpg" alt="">
          </div>
          <div class="mt-3">
            <p class="font-light text-black text-base">Cake</p>
            <p class="font-light text-2xl">Kue Hitam Lumer</p>
          </div>
        </div>
        
        <div class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img src="/img/3.jpg" alt="">
          </div>
          <div class="mt-3">
            <p class="font-light text-black text-base">Cake</p>
            <p class="font-light text-2xl">Kue Hitam Lumer</p>
          </div>
        </div>

        <div class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img src="/img/3.jpg" alt="">
          </div>
          <div class="mt-3">
            <p class="font-light text-black text-base">Cake</p>
            <p class="font-light text-2xl">Kue Hitam Lumer</p>
          </div>
        </div>

        <div class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img src="/img/3.jpg" alt="">
          </div>
          <div class="mt-3">
            <p class="font-light text-black text-base">Cake</p>
            <p class="font-light text-2xl">Kue Hitam Lumer</p>
          </div>
        </div>

        <div class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img src="/img/3.jpg" alt="">
          </div>
          <div class="mt-3">
            <p class="font-light text-black text-base">Cake</p>
            <p class="font-light text-2xl">Kue Hitam Lumer</p>
          </div>
        </div>

        <div class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img src="/img/2.jpg" alt="">
          </div>
          <div class="mt-3">
            <p class="font-light text-black text-base">Cake</p>
            <p class="font-light text-2xl">Kue Keju</p>
          </div>
        </div>
      </div>
    </div>
  {{-- Akhir Highlight --}}
@endsection