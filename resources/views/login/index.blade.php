@extends('layouts.main')

@section('container')
<section class="bg-white">
<div class="bg-white">
    <div class="flex justify-center h-screen">
        {{-- <div class="hidden bg-cover bg-center lg:block lg:w-2/3" style="background-image: url(/images/illustration/login-bg.webp)">
            <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-0">
            </div>
        </div> --}}

        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
            <div class="flex-1">
                <div class="text-center pb-5">
                    <div class="flex justify-center mx-auto">
                                <img src="/images/logo.webp" alt="" class="block w-1/2">
                    </div>
                    <p class="mt-3 text-gray-500 ">Login to access your account</p>
                </div>
                @if(session()->has('success'))
                <div role="alert" class="relative flex w-full px-4 py-4 text-base text-white bg-green-500 rounded-lg font-regular mt-3">
                    <div class="shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                        </path>
                      </svg>
                    </div>
                    <div class="ml-3 mr-12">{{ session('success') }}</div>
                  </div>
                @endif

                @if(session()->has('fail'))
                <div role="alert" class="relative flex w-full px-4 py-4 text-base text-white bg-red-500 rounded-lg font-regular mt-3">
                    <div class="shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                        </path>
                      </svg>
                    </div>
                    <div class="ml-3 mr-12">{{ session('fail') }}</div>
                  </div>
                @endif
                <div class="mt-8">
                    <form action="/login" method="post">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm text-gray-600 ">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Email" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg  focus:border-sky-400 focus:ring-sky-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('name')is-invalid @enderror" required value="{{ old('email') }}"/>
                            <label for="email">
                                @error('email')
                                    <p class="text-red-700">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </label>
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 ">Password</label>
                                {{-- <a href="#" class="text-sm text-gray-400 focus:text-sky-500 hover:text-sky-500 hover:underline">Forgot password?</a> --}}
                            </div>

                            <input type="password" name="password" id="password" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg  focus:border-sky-400 focus:ring-sky-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('name')is-invalid @enderror" required />
                            <label for="password">
                                @error('password')
                                    <p class="text-red-700">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </label>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-sky-800 rounded-lg hover:bg-sky-400 focus:outline-none focus:bg-sky-400 focus:ring focus:ring-sky-300 focus:ring-opacity-50">
                                Login
                            </button>
                        </div>

                    </form>

                    <p class="mt-6 text-sm text-center text-gray-400">Belum punya akun ? <a href="/register" class="text-sky-500 focus:outline-none focus:underline hover:underline">Register</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection