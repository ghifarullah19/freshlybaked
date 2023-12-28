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
