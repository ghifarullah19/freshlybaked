<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<body class="bg-custom min-h-screen">
    <div class="flex items-center justify-center min-h-full">
        <div class="bg-black bg-opacity-80 rounded-lg shadow p-8 w-full max-w-md justify-center">
            <p href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-50 dark:text-white">
                <img class="w-8 h-8 mr-2 rounded-full" src="img/logo.jpg" alt="logo">
                Freshly Baked
            </p>
            <form class="max-w-sm mx-auto" action="/register" method="POST">
                @csrf
                <div class="mb-5">
                  <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                  <input type="text" id="name" name="name" class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="John Doe" required value="{{ old('name') }}" required>
                </div>
                @error('name')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message  }}
                  </div>
                @enderror
                <div class="mb-5">
                  <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                  <input type="email" id="email" name="email" class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-800 focus:border-blue-800 shadow-sm-light" placeholder="name@email.com" required value="{{ old('email') }}" required>
                </div>
                @error('email')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message  }}
                  </div>
                @enderror
                <div class="mb-5">
                  <label for="password" class="block mb-2 text-sm font-medium text-white">Your password</label>
                  <input type="password" id="password" name="password" class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" required>
                </div>
                @error('password')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message  }}
                  </div>
                @enderror
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
              </form>
            <hr class="border-gray-300 my-4">
            <!-- Login button -->
            <div class="text-center mt-4">
                <span>
                    <small class="text-white">Already Have account?</small>
                    <a href="/login" class="text-gray-900 ">
                        <small class="text-blue-600"> Login</small>
                    </a>
                </span>
            </div>
        </div>
    </div>
</body>