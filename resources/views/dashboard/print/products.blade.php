<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

<div class="block text-black text-2xl text-center font-semibold mb-5">
  Tabel Produk
</div>
<div class="flex overflow-x-auto shadow-md sm:rounded-lg mx-3">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
      <thead class="text-xs text-gray-700 uppercase bg-[#BD9354]">
      <tr>
          <th scope="col" class="px-6 py-3 text-white">
              No
          </th>
          <th scope="col" class="px-6 py-3 text-white">
              Nama Produk
          </th>
          <th scope="col" class="px-6 py-3 text-white">
              Kategori
          </th>
          <th scope="col" class="px-6 py-3 text-white">
              Harga
          </th>
          <th scope="col" class="px-6 py-3 text-white">
              Produk
          </th>
      </tr>
      </thead>

      <tbody>
          @foreach ($menus as $menu)
          <tr class="odd:bg-white odd:dark:bg-amber-50 even:bg-gray-50 even:dark:bg-gray-300 dark:border-gray-700 border-b-2">
              {{-- Isi Tabel No --}}
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  {{ $loop->iteration }}
              </th>
              {{-- Isi Tabel Name --}}
              <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  {{ $menu->name  }}
              </td>
              {{-- Isi Tabel Categories --}}
              <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  {{ $menu->category->name }}
              </td>
              {{-- Isi Tabel Price --}}
              <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  Rp.{{ $menu->price }}
              </td>
              {{-- Isi Tabel Price --}}
              <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                @if ($menu->is_api == -1)
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                        Original
                    </span>    
                @else
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                        API
                    </span>
                @endif  
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>
</div>

<script>
    window.print();
    window.onafterprint = function(){
        window.close();
    }
</script>
