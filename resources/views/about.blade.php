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


    {{-- About Section --}}
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
    {{-- Akhir --}}


     {{-- Galeri --}}
        <div class=" bg-black container mx-auto p-4 mt-5">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                <img data-aos="fade-right" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/20.jpg"
                    alt=""
                />
                </div>
                <div>
                <img data-aos="fade-right" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/9.jpg"
                    alt=""
                />
                </div>
                <div>
                <img data-aos="fade-right" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/1.jpg"
                    alt=""
                />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                <img data-aos="zoom-in" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/5.jpg"
                    alt=""
                />
                </div>
                <div>
                <img data-aos="zoom-in" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/19.jpg"
                    alt=""
                />
                </div>
                <div>
                <img data-aos="zoom-in" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/18.jpg"
                    alt=""
                />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                <img data-aos="zoom-in" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/17.jpg"
                    alt=""
                />
                </div>
                <div>
                <img data-aos="zoom-in" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/16.jpg"
                    alt=""
                />
                </div>
                <div>
                <img data-aos="zoom-in" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/15.jpg"
                    alt=""
                />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                <img data-aos="fade-left" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/14.jpg"
                    alt=""
                />
                </div>
                <div>
                <img data-aos="fade-left" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/13.jpg"
                    alt=""
                />
                </div>
                <div>
                <img data-aos="fade-left" data-aos-duration="2000"
                    class="h-auto max-w-full rounded-lg"
                    src="img/3.jpg"
                    alt=""
                />
                </div>
            </div>
            </div>
        </div>
     {{-- Akhir Galeri --}}


    {{-- Team --}}
        <div class="flex flex-wrap -mx-3 mb-5 mt-7">
            <div class="w-full max-w-full px-3 mb-6  mx-auto">
            <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] border border-dashed border-stone-200 bg-white m-5">
                <!-- card body  -->
                <div class="self-center">
                <div>
                    <div class="mb-7 text-center">
                    <span class="text-[1.15rem] font-bold"> Made By Us </span>
                    </div>
                    <div class="flex flex-wrap w-full">
                    <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                        <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                        <img data-aos="fade-up-right" data-aos-duration="2000" class="inline-block shrink-5 rounded-[.95rem]" src="img/gilangg.jpg" alt="" width="150">
                        </div>
                        <div class="text-center">
                        <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Muhammad Lutfi</a>
                        <span class="block font-medium text-muted text-gray-600">Project Manager</span>
                        </div>
                    </div>
                    <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                        <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                            <img data-aos="flip-left" data-aos-duration="2000" class="inline-block shrink-5 rounded-[.95rem]" src="img/gilangg.jpg" alt="" width="150">
                        </div>
                        <div class="text-center">
                        <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Ainan Bahrul Ihsan</a>
                        <span class="block font-medium text-muted text-gray-600">Back End</span>
                        </div>
                    </div>
                    <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                        <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                            <img data-aos="flip-right" data-aos-duration="2000" class="inline-block shrink-5 rounded-[.95rem]" src="img/gilangg.jpg" alt="" width="150">
                        </div>
                        <div class="text-center">
                        <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Gilang Ramadhan</a>
                        <span class="block font-medium text-muted text-gray-600">Front End</span>
                        </div>
                    </div>
                    <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                        <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                            <img data-aos="fade-up-left" data-aos-duration="2000" class="inline-block shrink-5 rounded-[.95rem]" src="img/gilangg.jpg" alt="" width="150">
                        </div>
                        <div class="text-center">
                        <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Fauzi Ilyas</a>
                        <span class="block font-medium text-muted text-gray-600">Front End</span>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
     {{-- Akhir Team --}}

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
