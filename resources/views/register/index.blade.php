@extends('layouts.main')

@section('container')
<section class="bg-white">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover bg-center lg:block lg:w-2/3" style="background-image: url(/images/illustration/login-bg-2.webp)">
            <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-0">
                {{-- <div>
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">Infvckmatika </h2>
                    <p class="max-w-xl mt-3 text-gray-300">
                        Rumah bagi mereka yang ingin meresapi semangat teknologi. Dengan satu klik, Kamu membuka pintu menuju kemungkinan tak terbatas.
                    </p>
                </div> --}}
            </div>
        </div>
        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <div class="flex justify-start mx-auto">
                    <div class="text-left pt-6 pr-4">
                        <div class="flex justify-start mx-auto">
                                    <img src="/images/logo.webp" alt="" class="block w-1/3">
                        </div>
                    </div>
                </div>
                <h1 class="text-2xl mt-4 font-semibold tracking-wider text-gray-800 capitalize dark:text-sky-500">
                    Fostering Virtuosity, Creativity and Knowledge
                        </h1>

                <p class="mt-4 text-neutral-500 dark:text-gray-400">
                 Rumah bagi mereka yang ingin meresapi semangat teknologi. Dengan satu klik, Kamu membuka pintu menuju kemungkinan tak terbatas.
                </p>

                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" action="/register" method="post">
                    @csrf
                    <div>
                        <label class="block mb-2 text-sm text-neutral-700">Name</label>
                        <input type="text" placeholder="Name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-neutral-500 bg-white border border-gray-200 rounded-lg dark:placeholder-neutral-500 focus:border-sky-400 dark:focus:border-sky-400 focus:ring-sky-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('name')is-invalid @enderror" name="name" required value="{{ old('name') }}"/>
                        <label for="name">
                            @error('name')
                                <p class="text-red-700">
                                    {{ $message }}
                                </p>
                            @enderror
                        </label>
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-neutral-700">Username</label>
                        <input type="text" placeholder="Username" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-neutral-500 bg-white border border-gray-200 rounded-lg dark:placeholder-neutral-500  focus:border-sky-400 dark:focus:border-sky-400 focus:ring-sky-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('username')is-invalid @enderror" name="username"  required value="{{ old('username') }}"/>
                        <label for="username">
                            @error('username')
                                <p class="text-red-700">
                                    {{ $message }}
                                </p>
                            @enderror
                        </label>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-neutral-700">Email address</label>
                        <input type="email" placeholder="Enter your email" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-neutral-500 bg-white border border-gray-200 rounded-lg dark:placeholder-neutral-500  focus:border-sky-400 dark:focus:border-sky-400 focus:ring-sky-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('email')is-invalid @enderror" name="email"  required value="{{ old('email') }}"/>
                        <label for="email">
                            @error('email')
                                <p class="text-red-700">
                                    {{ $message }}
                                </p>
                            @enderror
                        </label>
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-neutral-700">Password</label>
                        <input type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-neutral-500 bg-white border border-gray-200 rounded-lg dark:placeholder-neutral-500  focus:border-sky-400 dark:focus:border-sky-400 focus:ring-sky-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('password')is-invalid @enderror" name="password" required value="{{ old('password') }}" />
                        <label for="password">
                            @error('password')
                                <p class="text-red-700">
                                    {{ $message }}
                                </p>
                            @enderror
                        </label>
                    </div>

                    <button type="submit"
                        class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-sky-800 rounded-lg hover:bg-sky-400 focus:outline-none focus:ring focus:ring-sky-300 focus:ring-opacity-50">
                        <span>Register Sekarang</span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection