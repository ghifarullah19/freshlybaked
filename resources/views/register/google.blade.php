<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">

@if (session('google_user'))
  @php
      $google_user = session('google_user');
  @endphp
@endif

<body class="bg-custom min-h-screen">
    <div class="flex items-center justify-center min-h-full">
        <div class="bg-black bg-opacity-80 rounded-lg shadow p-8 w-full max-w-md justify-center">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-50 dark:text-white">
                <img class="w-8 h-8 mr-2 rounded-full" src="../img/logo.jpg" alt="logo">
                Freshly Baked
            </a>
            <form class="max-w-sm mx-auto" action="/register/google" method="POST">
                @csrf
                <input type="hidden" id="google_id" name="google_id" value="{{ $google_user['google_id'] }}">
                <div class="mb-5">
                  <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                  <input type="text" id="name" name="name" class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white shadow-sm-light" placeholder="John Doe" required value="{{ $google_user['name'] }}" required readonly>
                </div>
                @error('name')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message  }}
                    </div>
                @enderror
                <div class="mb-5">
                  <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                  <input type="email" id="email" name="email" class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white shadow-sm-light" placeholder="name@email.com" required value="{{ $google_user['email'] }}" readonly>
                </div>
                @error('email')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message  }}
                  </div>
                @enderror
                <div class="mb-5">
                  <label for="password" class="block mb-2 text-sm font-medium text-white">Your password</label>
                  <input type="password" id="password" name="password" class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white shadow-sm-light" required>
                </div>
                @error('password')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message  }}
                  </div>
                @enderror
                <button type="submit" class="text-white bg-yellow-600 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Register new account</button>
              </form>
            <hr class="border-gray-300 my-4">
            <!-- Login button -->
            <div class="text-center mt-4">
                <span>
                    <small class="text-white">Already Have account?</small>
                    <a href="/login" class="text-gray-900 ">
                        <small class="text-yellow-600"> Login</small>
                    </a>
                </span>
            </div>
        </div>
    </div>
</body>