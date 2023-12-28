<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

@include('dashboard.layouts.header')
@include('dashboard.layouts.sidebar')

<body class="relative bg-[#6B240C] overflow-hidden max-h-screen">
<div class="text-4xl font-bold mb-4 mx-3 my-3"></div>
<hr class="border-t border-gray-600 my-4 mx-4 px-[610px]"> <!-- Separator line -->

<main class="ml-60 pt-8 max-h-screen overflow-auto">
    <div class="px-6 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl shadow-gray-900 drop-shadow-2xll p-8 mb-5">
                   {{-- modal button product --}}
                    <div class="block text-black mb-5 text-center font-semibold">
                        Tabel Order
                    </div>

                    <div class="flex flex-row">
                       {{-- button urut --}}
                       <form action="/dashboard/products" class="inline">
                           <select name="col" for="col" id="col" class="text-white bg-[#994D1C] hover:bg-[#E48F45] focus:ring-4 focus:outline-none focus:ring-[#994D1C] font-medium rounded-lg text-sm pl-2 py-2.5">
                               <option value="">Kolom</option>
                               <option value="id">Order ID</option>
                               <option value="user">Pelanggan</option>
                               <option value="total_price">Harga</option>
                               <option value="created_at">Dibuat Pada</option>
                               <option value="status">Status</option>
                           </select>
                           <select name="sort" for="sort" id="sort" class="text-white bg-[#994D1C] hover:bg-[#E48F45] focus:ring-4 focus:outline-none focus:ring-[#994D1C] font-medium rounded-lg text-sm pl-2 py-2.5">
                                <option value="">Urutan</option>
                                <option value="asc">Menaik</option>
                                <option value="desc">Menurun</option>
                            </select>
                           <button class="text-white bg-gray-800 hover:bg-gray-600-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">
                               Urut
                           </button>
                       </form>
                    </div>
                    
                <div class="flex overflow-x-auto shadow-md sm:rounded-lg mx-3 mt-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-800 ">
                        <tr>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Order ID
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Nama Pelanggan
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Total Harga
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-center text-xs font-semibold text-white uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-center text-xs font-semibold text-white uppercase tracking-wider">
                                Dibuat Pada
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-center text-xs font-semibold text-white uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($carts as $cart)
                            <tr>
                                {{-- Isi Tabel No --}}
                                <th scope="row" class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $loop->iteration }}
                                </th>
                                {{-- Isi Tabel Name --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $cart->code  }}
                                </td>
                                {{-- Isi Tabel Categories --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $cart->user->name }}
                                </td>
                                {{-- Isi Tabel Price --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Rp.{{ $cart->total_price }}
                                </td>
                                {{-- Isi Tabel Price --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    @if ($cart->status == 0)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Done
                                        </span>    
                                    @endif
                                </td>
                                {{-- Isi Tabel Price --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $cart->created_at }}
                                </td>
                                {{-- Isi Tabel Button --}}
                                <td class="px-6 flex">
                                <td class="px-6 ml-10 my-2 py-1 inline-flex bg-transparent">
                                    <button onclick="window.location.href='/dashboard/orders/{{ $cart->id }}'" type="button" class="ml-2 px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-s-lg hover:bg-blue-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                        <svg class="w-3 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                                <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                                            </g>
                                        </svg>
                                    </button>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
      fetch('/dashboard/products/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    // document.addEventListener('trix-file-accept', function(e) {
    //   e.preventDefault();
    // });

    // Menangani image preview
    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');
      imgPreview.style.display = 'block';
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREVent) {
        imgPreview.src = oFREVent.target.result;
      }
    }
</script>
</body>
