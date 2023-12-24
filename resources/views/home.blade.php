@extends('layouts.main')

    @section('container')

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- Style --}}
        <style>
            .fade-enter-active, .fade-leave-active {
                transition: opacity 0.5s;
            }

            .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
                opacity: 0;
            }
        </style>
        {{-- Akhir Style --}}

            {{-- Header --}}
            <section class="h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('img/bg100.jpg');">
                <div class="text-center text-white p-4">
                    <h2 data-aos="zoom-out" data-aos-duration="3000" class="text-2xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-1">Si Apih Freshly Baked</h2>
                    <p data-aos="zoom-out" data-aos-duration="3000" class="text-sm md:text-lg lg:text-xl xl:text-2xl">Baking Private & Made By Order</p>
                </div>
            </section>

            {{-- Akhir Header --}}

                        {{-- A --}}
                        <section class="bg-[#85603F]">
                            <div class="container mx-auto flex items-center justify-center py-8">
                                <div class="max-w-4xl w-full bg-gray-100 p-8 rounded-md shadow-md flex items-center">
                                    <div class="w-1/3 pr-8">
                                        <h2 class="text-2xl font-bold mb-4 text-gray-900 italic">About</h2>
                                        <p class="text-gray-800">Founder dari Si Apih Freshly Baked. Lahir pada tanggal 4 Oktober 1976 di Sumendang. Akrab dipanggil Si Apih ini merupakan koki yang berpengalaman.</p>
                                    </div>
                                    <div class="w-1/3 text-center">
                                        <img src="img/siapih1.jpg" alt="About Us" class="mx-auto rounded-full" width="350">
                                    </div>
                                    <div class="w-1/3 pl-8">
                                        <h2 class="text-2xl font-bold mb-4 text-gray-900"></h2>
                                        <p class="text-gray-800 ">Dia pernah bekerja di Dubai selama beberapa tahun dan menjadi Chef Pastry di beberapa hotel ternama di Bandung. Setelah tidak melanjutkan kontraknya di Hotel Holiday Inn Pasteur, kini Si Apih fokus kepada usahanya.</p>
                                    </div>
                                </div>
                            </div>
                        </section>



                        {{-- A --}}

            {{-- Awal Highlight Produk --}}
                <div class="container mx-auto mt-10 mb-16">
                    <h1  class="font-bold text-2xl pt-20 text-center highlight-title" id="highlight"> Highlight </h1>
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 mx-5 md:mx-0">
                        @foreach ($menus as $menu)
                            <div class="bg-[#85603F] w-72 h-96 shadow-md m-3 hover:-translate-y-5 transition rounded-2xl">
                                <div class="h-3/4 w-full rounded-t-2xl">
                                    <img class="w-full h-full object-cover rounded-t" src="/img/1.jpg" alt="piña" >
                                </div>
                                <div class="w-full h-1/4 p-3 bg-amber-800/[0.7] rounded-b-2xl">
                                        <span class="text-lg font-semibold text-white uppercase tracking-wide ">{{ $menu->name }}</span>
                                    <p class="text-gray-300 text-sm leading-5 mt-1">{{ $menu->category->name }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            {{-- Akhir Highlight --}}
            {{-- Akhir --}}
        <section class="text-white body-font relative">
            <div class="absolute inset-0 bg-gray-300" id="contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126754.16878830967!2d107.43259844335937!3d-6.88248469999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b7c62b117b%3A0x5afbf7beb8b7a5d7!2sSi%20Apih%20freshly%20baked!5e0!3m2!1sid!2sid!4v1703387343381!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container px-5 py-20 mx-10 shadow-2xl flex">
                <div class="lg:w-1/3 md:w-1/2 bg-[#BD9354] rounded-lg p-6 flex flex-col md:ml-auto w-1/2 mt-10 md:mt-0 relative z-10 shadow-md">
                    <h2 class="text-white text-3xl mb-1 font-medium title-font">Contact Us</h2>
                    <p class="leading-relaxed mb-5 text-gray-600"></p>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-white">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-white">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Kirim</button>
                </div>
            </div>
        </section>
        <script>
        AOS.init();
        </script>


    @endsection
