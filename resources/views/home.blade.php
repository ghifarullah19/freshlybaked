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

{{-- About --}}
<!-- component -->
<div class="text-xl font-bold m-5 text-center max-w-screen-xl w-full pt-24" id="about"></div>
    <div class="gallery border-2 rounded mx-auto m-5 bg-white" style="width:1024px; height:500px;">
        <div class="top flex p-2 border-b select-none">
          <div class="heading text-gray-800 w-full pl-3 font-semibold my-auto"></div>
          <div class="buttons ml-auto flex text-gray-600 mr-1">
            <svg action="prev" class="w-7 border-2 rounded-l-lg p-1 cursor-pointer border-r-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path action="prev" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
            <svg action="next" class="w-7 border-2 rounded-r-lg p-1 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path action="next" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
          </div>
        </div>
        <div class="content-area w-full h-96 overflow-hidden">
          <div class="platform shadow-xl h-full flex">
            <!-- frame start -->
            <div class="each-frame border-box flex-none h-full" title="About"> <!-- title shows in top -->
                <!-- this is full editable area -->
                <div class="main flex w-full p-8">
                    <div class="sub w-4/6 my-auto">
                      <img data-aos="zoom-in" data-aos-duration="3000" class="rounded-md ml-8" src="img/logo1.jpg" alt="image" width="300" >
                    </div>
                    <div class="sub w-full my-auto">
                        <div data-aos="fade-left" data-aos-duration="3000" class="head text-3xl font-bold mb-4 ml-5">FreshlyBaked</div>
                        <div data-aos="fade-left" data-aos-duration="3000" class="long-text text-lg ml-4">FreshlyBaked Adalah Sebuah Toko Yang Menjual Berbagi Macam Kue. Didirikan pada tahun 2017, Freshly Baked by Origin Bakery didirikan karena kami melihat potensi pertumbuhan industri roti di Indonesia melalui perubahan gaya hidup. Namun, saat ini pilihan roti yang lebih sehat sangat sedikit dan kemungkinan besar harganya mahal.</div>
                    </div>
                </div>
            </div>
            <!-- frame end -->

            <div class="each-frame border-box flex-none h-full" title="Head Chef"> <!-- title shows in top -->
                <!-- this is full editable area -->
                <div class="main flex w-full p-8">
                    <div class="sub w-4/6 my-auto">
                        <img data-aos="zoom-in" data-aos-duration="3000" class="rounded-md ml-8" src="img/siapih1.jpg" alt="" width="300">
                    </div>
                    <div class="sub w-full my-auto">
                        <div data-aos="fade-left" data-aos-duration="3000" class="head text-3xl font-bold mb-4">Yadi Haryadi Fitriawan</div>
                        <div data-aos="fade-left" data-aos-duration="3000" class="long-text text-lg">Founder dari Si Apih Freshly Baked. Lahir pada tanggal 4 Oktober 1976 di Sumendang. Akrab dipanggil Si Apih ini merupakan koki yang berpengalaman. Dia pernah bekerja di Dubai selama beberapa tahun dan menjadi Chef Pastry di beberapa hotel ternama di Bandung. Setelah tidak melanjutkan kontraknya di Hotel Holiday Inn Pasteur, kini Si Apih fokus kepada usahanya.</div>
                    </div>
                </div>
            </div>
            <!-- frame end -->
          </div>
        </div>
      </div>

      <style>
          .platform{
              position: relative;
              transition:right 0.3s;
          }
          .body{background-color:white !important;}
      </style>






    {{-- Awal Highlight Produk --}}
    <div class="container mx-auto mt-8" id="highlight" style="padding-top: 70px;">
      <h1  class="font-bold text-2xl text-center highlight-title"> Highlight </h1>
      <div class="mt-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 mx-5 md:mx-0">
        @foreach ($menus as $menu)
        <div data-aos="zoom-in" data-aos-duration="3000" class="border border-black p-4 rounded-xl">
          <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
            <img data-aos="zoom-in" data-aos-duration="3000" src="/img/1.jpg" alt="">
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

  {{-- halaman contact us --}}
  <div class="bg-white h-screen flex items-center justify-center pt-24" id="contact">

    <div class="bg-gray-200 p-8 rounded shadow-md w-full max-w-xl mx-auto">
      <div class="bg-white p-8 rounded shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Contact Us</h1>

        <form action="#" method="post">
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Your Name</label>
            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
          </div>

          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-600">Your Email</label>
            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
          </div>

          <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-600">Message</label>
            <textarea id="message" name="message" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
          </div>

          <button type="submit" class="bg-blue-500 text-white p-2 rounded-md w-full">Send Message</button>
        </form>
      </div>
    </div>

  </div>

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

<script>
  function gallery(){
      this.index=0;
      this.load=function(){
        this.rootEl = document.querySelector(".gallery");
        this.platform = this.rootEl.querySelector(".platform");
        this.frames = this.platform.querySelectorAll(".each-frame");
        this.contentArea = this.rootEl.querySelector(".content-area");
        this.width = parseInt(this.rootEl.style.width);
        this.limit = {start:0,end:this.frames.length-1};
        this.frames.forEach(each=>{each.style.width=this.width+"px";});
        this.goto(this.index);
      }
      this.set_title = function(){this.rootEl.querySelector(".heading").innerText=this.frames[this.index].getAttribute("title");}
      this.next = function(){this.platform.style.right=this.width * ++this.index + "px";this.set_title();}
      this.prev = function(){this.platform.style.right=this.width * --this.index + "px";this.set_title();}
      this.goto = function(index){this.platform.style.right = this.width * index + "px";this.index=index;this.set_title();}
      this.load();
  }
  var G = new gallery();
    G.rootEl.addEventListener("click",function(t){
        var val = t.target.getAttribute("action");
        if(val == "next" && G.index != G.limit.end){G.next();}
        if(val == "prev" && G.index != G.limit.start){G.prev();}
        if(val == "goto"){
            let rv = t.target.getAttribute("goto");
            rv = rv == "end" ? G.limit.end:rv;
            G.goto(parseInt(rv));
        }
    });
    document.addEventListener("keyup",function(t){
        var val = t.keyCode;
        if(val == 39 && G.index != G.limit.end){G.next();}
        if(val == 37 && G.index != G.limit.start){G.prev();}
    });

    // run G.load() if new data loaded with ajax

</script>
@endsection
