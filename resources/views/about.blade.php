@extends('layouts.main')

@section('container')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    {{--  Visi Misi--}}
    <div class="bg-gray-100">

        <div class="bg-yellow-950">
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- About Us Section -->
                    <div class="mb-8">
                        <h1 data-aos="fade-right" data-aos-duration="1000" class="text-2xl text-center text-gray-100 italic font-bold mb-5 pt-3 pb-3 border-2">Visi & Misi</h1>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Photo Section -->
                            <div>
                                <img data-aos="fade-right" data-aos-duration="1000" class=" h-auto border-4" src="img/S3.jpg" alt="Owner Photo">
                            </div>

                            <!-- Description Section -->
                            <div>
                                <p data-aos="fade-right" data-aos-duration="1000" class="text-base md:text-lg lg:text-2xl text-gray-100 mx-auto mb-3 italic">Si Apih Freshly Baked</p>
                                <p data-aos="fade-right" data-aos-duration="1000" class="text-base md:text-lg  text-gray-300 mx-auto italic">1. Menumbuhkan kreativitas dari para pekerja di si Apih FreshlyBaked untuk dapat menciptakan produk-produk yang berkualitas dan nantinya diharapkan dapat meningkatkan kepuasan dari customer Si Apih FreshlyBaked
                                    <br><br>2. Dapat terciptanya suatu kerja sama yang bersifat saling menguntungkan untuk sesama karyawan, pelanggan dan dengan masyarakat sekitar yang sangat baik untuk perkembangan Si Apih FreshlyBaked
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Toko Section -->
                    <div class="font-sans bg-yellow-950">
                        <section class="flex items-center justify-center min-h-screen pt-14">
                            <div class="text-center mx-auto max-w-2xl">
                                <!-- Gambar Toko -->
                                <div class="relative inline-block pt-5">
                                    <img data-aos="fade-up" data-aos-duration="1000" src="img/GG.jpg" alt="Toko" class="w-full h-auto mb-4 rounded-2xl border-4">

                                </div>

                                <!-- Deskripsi Toko -->
                                <p data-aos="fade-up" data-aos-duration="1000" class="text-base md:text-lg text-gray-100 mx-auto mb-8 italic">
                                    Dua poin penting yang diutamakan adalah wujud kasih dan berkat Tuhan serta pengamalan kasih. Setiap pertumbuhan dan kemajuan yang telah dicapai oleh Apih FreshlyBaked merupakan salah satu perwujudan kasih dan berkat Tuhan Yang Maha Esa. Sangat diharapkan bila keberadaan Apih FreshlyBaked di tengah maraknya dunia usaha yang berkembang pesat sekarang ini dapat mengamalkan kasih Tuhan kepada sesama manusia, termasuk untuk para karyawan dan pelanggan Si Apih FreshlyBaked.
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Akhir Visi Misi --}}

    {{--  --}}
        {{-- Siapih --}}
    <section id="" class="pt-10 bg-[#50382b] pb-20">
        <div class="container mx-auto px-4">
            <div class="">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="col-span-3 md:col-span-2">
                        <h1 class="text-3xl font-bold mb-4 text-[#FFCD8B]">ABOUT US</h1>
                        <div class="md:flex">
                            <p class="md:w-1/2 lg:w-3/4 text-lg text-gray-100 italic">
                                Si Apih Freshly Baked Didirikan Tahun 2017 alamatnya di Jl Sariwangi dalam 28, Jl. Sarijadi Raya No.64 blok 23, Sukawarna, toko roti ini berdiri atas ide dari Bp Apih bersama istrinya, yang terinspirasi oleh salah satu toko roti di Bandung yang sempat beliau kunjungi dan beliau menilai konsep yang diusung oleh toko roti tersebut bagus yaitu roti
                                <span class=" text-lg text-yellow-300 font-bold"><br>"FRESH FROM THE OVEN".</span>
                            </p>
                            <div class="md:w-1/2 mt-4 md:mt-0">
                                <div class="">
                                    <img class=" h-250 mx-auto border-4 rounded-lg" src="img/siapih2.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-1">
                        <div class="text-start text-gray-200 lg:text-left text-lg italic">
                            Toko Si Apih Freshly Baked ini semakin berkembang, Owner Si Apih mementingkan kenyamanan para customer saat berkunjung ke Si Apih Freshly Baked Toko Roti miliknya ini di Jl Sariwangi dalam 28, Jl. Sarijadi Raya No.64 blok 23 Bandung. Keputusan ini diambil karena memikirkan kenyamanan para customer saat berkunjung ke Si Apih Freshly Baked.

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Siapih --}}
    {{--  --}}



    {{-- Tim --}}
    <div class="bg-[#FAEED1]">
        <div class="container mx-auto p-8">
            <h1 class="text-2xl pt-8 font-bold mb-8 text-gray-800 text-center">WEBSITE CREATORS</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 pb-20">
                <!-- Team Member 1 -->
                <div data-aos="zoom-out" data-aos-duration="1000" class="bg-white p-4 rounded-md shadow-md">
                    <img src="img/gilang2.jpg" alt="Team Member 1" class="w-full h-auto rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-gray-800">Gilang Ramadhan</h2>
                    <p class="text-sm font-semibold text-gray-600">Front-End</p>

                    <!-- Informasi sosial media dan email -->
                    <div class="mt-4 flex space-x-4">
                        <a href="https://www.instagram.com/gilangrmdhaaan/" target="_blank">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/instagram.svg" alt="Instagram" class="w-6 h-6">
                        </a>
                        <a href="https://github.com/anakiiinskywalker" target="_blank">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/github.svg" alt="GitHub" class="w-6 h-6">
                        </a>
                        <a href="mailto:johndoe@gmail.com">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/gmail.svg" alt="Gmail" class="w-6 h-6">
                        </a>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div data-aos="zoom-out" data-aos-duration="1000" class="bg-white p-4 rounded-md shadow-md">
                    <img src="img/lutfi1.jpg" alt="Team Member 2" class="w-full h-auto rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-gray-800">Muhammad Lutfi</h2>
                    <p class="text-sm font-semibold text-gray-600">Project Manager | Back-End</p>

                    <!-- Informasi sosial media dan email -->
                    <div class="mt-4 flex space-x-4">
                        <a href="https://www.instagram.com/ghifarullah19/" target="_blank">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/instagram.svg" alt="Instagram" class="w-6 h-6">
                        </a>
                        <a href="https://github.com/ghifarullah19" target="_blank">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/github.svg" alt="GitHub" class="w-6 h-6">
                        </a>
                        <a href="mailto:ghifarullah11@gmail.com">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/gmail.svg" alt="Gmail" class="w-6 h-6">
                        </a>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div data-aos="zoom-out" data-aos-duration="1000" class="bg-white p-4 rounded-md shadow-md">
                    <img src="img/ainan1.jpg" alt="Team Member 3" class="w-full h-auto rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-gray-800">Ainan Bahrul Ihsan</h2>
                    <p class="text-sm font-semibold text-gray-600">Back-End</p>

                    <!-- Informasi sosial media dan email -->
                    <div class="mt-4 flex space-x-4">
                        <a href="https://www.instagram.com/dedeinoen/" target="_blank">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/instagram.svg" alt="Instagram" class="w-6 h-6">
                        </a>
                        <a href="https://github.com/Multiverse88" target="_blank">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/github.svg" alt="GitHub" class="w-6 h-6">
                        </a>
                        <a href="mailto:johndoe@gmail.com">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/gmail.svg" alt="Gmail" class="w-6 h-6">
                        </a>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div data-aos="zoom-out" data-aos-duration="1000" class="bg-white p-4 rounded-md shadow-md">
                    <img src="img/fauzi.jpg" alt="Team Member 4" class="w-full h-auto rounded-md mb-4">
                    <h2 class="text-lg font-semibold text-gray-800">Fauzi Ilyas</h2>
                    <p class="text-sm font-semibold text-gray-600">Front-End</p>

                    <!-- Informasi sosial media dan email -->
                    <div class="mt-4 flex space-x-4">
                        <a href="https://www.instagram.com/rein_schz/" target="_blank">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/instagram.svg" alt="Instagram" class="w-6 h-6">
                        </a>
                        <a href="https://github.com/fauzikirito" target="_blank">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/github.svg" alt="GitHub" class="w-6 h-6">
                        </a>
                        <a href="mailto:johndoe@gmail.com">
                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5.16.0/icons/gmail.svg" alt="Gmail" class="w-6 h-6">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Akhir Tim --}}



        <script>
            AOS.init();
        </script>

@endsection
