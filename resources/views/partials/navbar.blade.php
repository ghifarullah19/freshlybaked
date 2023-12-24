<nav class="bg-[#9E7540] fixed h-[65px] w-full z-20 top-0 start-0 z20">
  <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="/img/freshlybaked.png" class="h-8 rounded-full" alt="Logo">
      <span class="nav-title self-center text-xl font-semibold whitespace-nowrap dark:text-white text-opacity-0 md:text-opacity-100 lg:text-opacity-100">FreshlyBaked</span>
    </a>
    <div class="flex flex-row md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      @auth
      <!-- tombol cart -->
      <button onclick="window.location.href='/checkout'" class="mr-3 mb-2">
        <svg class="w-5 h-5 text-gray-800 dark:text-white inline mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
        </svg>
      </button>
      <!-- tombol login -->
      <form action="/logout" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token ()}}">
        {{--button dropdown navbar--}}
          <button id="dropdownInformationButton" data-dropdown-toggle="dropdown" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium text-sm rounded-full text-center inline-flex items-center" type="button">
              @if (Auth()->user()->image != null)
              <div class="h-8 w-8">
                  <img class="object-cover w-full h-full rounded-full" src="{{ asset('storage/' . Auth()->user()->image) }}">
              </div>
              @else
              <div class="h-8 w-8">
                  <img class="object-cover w-full h-full rounded-full" src="/img/nophoto.png">
              </div>
              @endif
          </button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-[#E3D18A] divide-y divide-gray-100 rounded-lg shadow w-44">
              <ul class="py-2 text-sm text-center text-white" aria-labelledby="dropdownDefaultButton">
                  <li>
                      <a href="/dashboard" class="block px-16 py-2 hover:bg-[#9E7540]">Dashboard</a>
                  </li>
                  <li>
                      <a href="/profile" class="block px-16 py-2 hover:bg-[#9E7540]">Profile</a>
                  </li>
                  <li>
                      <button type="submit" class="block px-16 py-2 hover:bg-[#9E7540]">Logout</button>
                  </li>
              </ul>
          </div>
        </form>
      @else
          <button type="button">
            <a href="/login" class="text-white">
              Login
            </a>
          </button>
      @endauth
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-5 h-5 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 bg-[#9E7540] md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        <li>
          <a href="/" class="nav-link block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:hover:text-blue-700 md:p-0" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#about" class="nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
          <a href="#highlight" class="nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Highlight</a>
        </li>
        <li>
          <a href="#contact" class="nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
        <li>
          <a href="/products" class="nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Products</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script>
  const navLinks = document.querySelector('.nav-links')
  function onToggleMenu(e){
      e.name = e.name === 'menu' ? 'close' : 'menu'
      navLinks.classList.toggle('top-[13%]')
  }
</script>
