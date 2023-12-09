<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">


<body class="bg-custom min-h-screen login ">
    <div class="flex items-center justify-center min-h-full">
        <div class="bg-gray-900 bg-opacity-60  rounded-lg shadow p-8 w-full max-w-md justify-center">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-50 dark:text-white">
                <img class="w-8 h-8 mr-2 rounded-full" src="img/logo.jpg" alt="logo">
                Freshly Baked
            </a>
            <form class="max-w-sm mx-auto">
                <div class="mb-5">
                    <label for="email" class="block mx-auto align-middle  mb-2 text-xs font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Please enter your email !" required>
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                </div>
                <div class="mb-5">
                    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat password</label>
                    <input type="password" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                </div>
                <button type="submit" class="block mx-auto align-middle text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
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