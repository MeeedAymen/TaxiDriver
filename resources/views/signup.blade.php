<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <form class="bg-gray-200 h-screen pt-[10%]">
            @csrf
            <div class="flex justify-center ">
                <div class="flex items-center border border-gray-300 w-full max-w-md px-6 mx-auto lg:w-2/6  rounded-xl bg-white drop-shadow-lg ">
                    <div class="flex-1 p-4">
                        <div class="text-center">
                            <p class="mt-3 text-3xl font-bold text-blue-500">Sign Up</p>
                        </div>
                        <div class="mt-8">
                            <form>
                                <div>
                                    <label for="name" class="block mb-2 text-sm text-gray-600">First name</label>
                                    <input type="text" name="name" id="name" placeholder="Your first Name" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring">
                                </div>

                                <div class="mt-3">
                                    <label for="name" class="block mb-2 text-sm text-gray-600">Last name</label>
                                    <input type="text" name="name" id="name" placeholder="Your last Name" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring">
                                </div>

                                <div class="mt-3">
                                    <label for="email" class="block mb-2 text-sm text-gray-600">Phone</label>
                                    <input type="email" name="email" id="email" placeholder="Your phone" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring">
                                </div>

                                <div class="mt-3">
                                    <label for="email" class="block mb-2 text-sm text-gray-600">Email Address</label>
                                    <input type="email" name="email" id="email" placeholder="name@gmail.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring">
                                </div>

                                <div class="mt-3">
                                    <label for="password" class="block mb-2 text-sm text-gray-600">Password</label>
                                    <input type="password" name="password" id="password" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring">
                                </div>

                                <div class="mt-3">
                                    <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                        Sign up
                                    </button>
                                </div>
                            </form>
                            <p class="mt-6 text-sm text-center text-gray-400">Login to your account <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
