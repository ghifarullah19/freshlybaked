{{-- {{ dd($Historys->id) }} --}}
@extends('layouts.main')

@section('container')

{{-- New Version --}}
<section class="flex flex-col gap-5 py-20 mt-20 overflow-hidden font-poppins sm:py-4">
  <div class="block text-black text-center font-semibold">
    Tabel History
  </div>
  <div class="w-full">
      <div class="container overflow-x-auto shadow-md sm:rounded-lg mx-auto">
          <table class="w-full rounded-full text-sm text-left rtl:text-right text-gray-500 ">
              <thead class="text-xs text-gray-700 uppercase bg-gray-800 ">
              <tr>
                  <th scope="col" class="px-6 py-3 text-white">
                      No
                  </th>
                  <th scope="col" class="px-6 py-3 text-white">
                      Tanggal
                  </th>
                  <th scope="col" class="px-6 py-3 text-white">
                      Status
                  </th>
                  <th scope="col" class="px-6 py-3 text-white">
                      Harga Total
                  </th>
                  <th scope="col" class="px-6 py-3 text-white">
                      Action
                  </th>
              </tr>
              </thead>
    
              <tbody>
                  {{-- {{ dd($histories->id) }} --}}
                  @foreach ($histories as $history)
                  <tr class="odd:bg-white odd:dark:bg-amber-50 even:bg-gray-50 even:dark:bg-gray-300 dark:border-gray-700 border-b-2">
                      {{-- Isi Tabel No --}}
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                          {{ $loop->iteration }}
                      </th>
                      {{-- Isi Tabel Categories --}}
                      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                          {{ $history->date }}
                      </td>
                      {{-- Isi Tabel Price --}}
                      <td class="px-6 py-4 font-medium whitespace-nowrap">
                        @if ($history->status == 0)
                        <span class="bg-red-600 text-white p-1 rounded-[5px]">
                            Belum Dibayar
                        </span>
                        @elseif ($history->status == 1)
                        <span class="bg-green-600 text-white p-1 rounded-[5px]">
                            Sudah Dibayar
                        </span>
                        @elseif ($history->status == 2)
                        <span class="bg-yellow-600 text-white p-1 rounded-[5px]">
                            Pesanan Dihapus
                        </span>
                        @endif
                      </td>
                      {{-- Isi Tabel Price --}}
                      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                          Rp.{{ $history->total_price }}
                      </td>
                      {{-- Isi Tabel Button --}}
                      <td class="px-6 py-2 font-medium whitespace-nowrap">
                          <form action="/history/{{ $history->id }}" method="get">
                              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detail</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>
  </div>
</section>

@endsection