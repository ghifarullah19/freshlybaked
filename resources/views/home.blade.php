@extends('layouts.main')

@section('container')
<div class="relative top-[82px]">
  <div id="default-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-96 md:h-[500px] overflow-hidden rounded-lg">
          <!-- Item 1 -->
        <div class="hidden duration-1000 ease-in" data-carousel-item>
            <img src="/img/dish1.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-1000 ease-in" data-carousel-item>
            <img src="/img/dish1.1.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-1000 ease-in" data-carousel-item>
            <img src="/img/bg.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
  </div>
  
  <section id="about w-full">
    <div class="mx-auto">
      <div class="flex flex-col about text-center">
        <h2 class="about-title" data-aos="fade-down">About Us</h2>
        <div class="flex flex-row justify-evenly flex-wrap">
          <div class="flex flex-col">
            <div class="flex flex-col w-[500px] px-10 about-apih" data-aos="fade-up">
              <img
                src="img/siapih1.jpg"
                alt="yadi"
                width="200"
                class="rounded-circle block mx-auto" 
              />
              <h3>Yadi Haryadi Fitriawan</h3>
              <p>Head Chef</p>
              <div class="container px-1">
                <p>
                  Founder dari Si Apih Freshly Baked. Lahir pada tanggal 4
                  Oktober 1976 di Sumedang. Akrab dipanggil Si Apih ini
                  merupakan koki yang berpengalaman. Dia pernah bekerja di Dubai
                  selama beberapa tahun dan menjadi Chef Pastry di beberapa
                  hotel ternama di Bandung. Setelah tidak melanjutkan kontraknya
                  di Hotel Holiday Inn Pasteur, kini Si Apih fokus kepada
                  usahanya.
                </p>
              </div>
            </div>
          </div>
          <div class="flex flex-col">
            <div class="flex flex-col w-[500px] px-10 about-us" data-aos="fade-up">
              <img
                src="img/logo.jpg"
                alt="si_apih"
                width="200"
                class="rounded-circle block mx-auto"
              />
              <h3>Si Apih Freshly Baked</h3>
              <p>Bakery</p>
              <div class="container px-1">
                <p>
                  Alamat kami berada di Jl. Sariwangi Dalam 28 Blok 23/64 Kota
                  Bandung. Si Apih Freshly Backed dikelola bersama istrinya. Saat
                  ini hanya menerima pesenan melalui pre-order. Kedepannya Si Apih
                  Freshly Backed akan bersaing dengan toko kue ternama lainnya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir about -->
</div>
@endsection