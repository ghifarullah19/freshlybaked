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

                    <div class="flex flex-row justify-between">
                       {{-- button urut --}}
                       <div class="flex flex-col">
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

                       <div class="flex flex-col mr-3">
                           <button onclick="window.location.href='/dashboard/orders'" class="mr-1 mb-5 block text-[#994D1C] hover:text-white border border-[#994D1C] hover:bg-[#994D1C] focus:ring-4 focus:outline-none focus:ring-[#994D1C] font-medium rounded-lg text-sm px-5 py-2.5 text-center h-fit" type="button">
                            Back
                          </button>
                       </div>
                    </div>
                    
                <div class="flex overflow-x-auto shadow-md sm:rounded-lg mx-3">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-800 ">
                        <tr>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Produk
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Keranjang
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Harga
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-center text-xs font-semibold text-white uppercase tracking-wider">
                                Total Harga
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-center text-xs font-semibold text-white uppercase tracking-wider">
                                Dibuat Pada
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($cart_details as $detail)
                            <tr>
                                {{-- Isi Tabel No --}}
                                <th scope="row" class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $loop->iteration }}
                                </th>
                                {{-- Isi Tabel Name --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $detail->menu->name  }}
                                </td>
                                {{-- Isi Tabel Categories --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $detail->cart->id }}
                                </td>
                                {{-- Isi Tabel Price --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Rp.{{ $detail->price }}
                                </td>
                                {{-- Isi Tabel Price --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Rp.{{ $detail->total_price }}
                                </td>
                                {{-- Isi Tabel Price --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $detail->created_at }}
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
