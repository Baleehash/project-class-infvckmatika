@extends('dashboard.layouts.main')


@section('container')
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
<div class="px-6 pt-6 2xl:container">
  <h1 class="text-3xl font-semibold text-sky-800 ml-3 py-3">Welcome back, {{ auth()->user()->name }}</h1>
  <hr class="ml-3"></div>

  <main class="">
    <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl">
        <div class="grid grid-cols-12 gap-6">
            <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                <div class="col-span-12 mt-8">
                    <div class="flex items-center h-10 intro-y">
                        <h2 class="mr-5 text-lg font-medium truncate">Dashboard</h2>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <h1 class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                            href="#">
                            <div class="p-5">
                                <div class="flex justify-between">
                                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-10 w-10" viewBox="0 0 22 22"           fill="currentColor"
                                  >
                                    <path d="M20,11h-1V6c0-0.6-0.4-1-1-1h-5V4c0-1.1-0.9-2-2-2S9,2.9,9,4v1H4C3.4,5,3,5.4,3,6v5h1c1.1,0,2,0.9,2,2s-0.9,2-2,2H3v5 c0,0.6,0.4,1,1,1h5v-1c0-1.1,0.9-2,2-2s2,0.9,2,2v1h5c0.6,0,1-0.4,1-1v-5h1c1.1,0,2-0.9,2-2S21.1,11,20,11z" opacity=".3" class="text-sky-300 group-hover:text-blue-300"></path>
                                    
                                    <path d="M18,22h-6v-2c0-0.6-0.4-1-1-1c-0.6,0-1,0.4-1,1v2H4c-1.1,0-2-0.9-2-2v-6h2c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H2V6 c0-1.1,0.9-2,2-2h4c0-1.7,1.3-3,3-3c1.7,0,3,1.3,3,3h4c1.1,0,2,0.9,2,2v4c1.7,0,3,1.3,3,3c0,1.7-1.3,3-3,3v4 C20,21.1,19.1,22,18,22z M14,20h4v-6h2c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1h-2V6h-6V4c0-0.6-0.4-1-1-1c-0.6,0-1,0.4-1,1v2H4v4 c1.7,0,3,1.3,3,3c0,1.7-1.3,3-3,3v4h4c0-1.7,1.3-3,3-3C12.7,17,14,18.3,14,20z" class="fill-current text-sky-300 group-hover:text-blue-600 dark:group-hover:text-blue-400"></path>
                                    </svg>
                                    {{-- <div
                                        class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                        <span class="flex items-center">30%</span>
                                    </div> --}}
                                </div>
                                <div class="ml-2 w-full flex-1">
                                    <div>
                                        <div class="mt-3 text-3xl font-bold leading-8">{{ $projects->count() }}</div>

                                        <div class="mt-1 text-base text-gray-600">Project Member</div>
                                    </div>
                                </div>
                            </div>
                          </h1>
                        <h1 class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                            href="#">
                            <div class="p-5">
                                <div class="flex justify-between">
                                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  class="h-10 w-10" viewBox="0 0 22 22"           fill="currentColor"
                                  >
                                    <path d="M18.92,9C18.434,5.609,15.526,3,12,3S5.566,5.609,5.08,9H18.92z" opacity=".3" class="text-sky-300 group-hover:text-blue-300"></path>
                            
                                    <path d="M17,8H7c-1.654,0-3,1.346-3,3v1h2v-1c0-0.551,0.449-1,1-1h10c0.551,0,1,0.449,1,1v1h2v-1C20,9.346,18.654,8,17,8z" ></path>
                            
                                    <path d="M20,11.767V10c0-4.411-3.589-8-8-8s-8,3.589-8,8v1.767C3.372,12.329,3,13.14,3,14c0,1.276,0.823,2.397,1.992,2.816C6.396,20.028,9.043,22,12,22s5.604-1.972,7.008-5.184C20.177,16.397,21,15.276,21,14C21,13.14,20.628,12.329,20,11.767z M18.137,14.981l-0.585,0.081l-0.211,0.551C16.302,18.319,14.256,20,12,20s-4.302-1.681-5.34-4.386l-0.211-0.551l-0.585-0.081C5.371,14.914,5,14.492,5,14c0-0.36,0.186-0.682,0.498-0.861L6,12.851V10c0-3.309,2.691-6,6-6s6,2.691,6,6v2.851l0.502,0.288C18.814,13.318,19,13.64,19,14C19,14.492,18.629,14.914,18.137,14.981z" class="fill-current text-sky-300 group-hover:text-blue-600 dark:group-hover:text-blue-400"
                                    ></path>
                                    </svg>
                                    {{-- <div
                                        class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                        <span class="flex items-center">30%</span>
                                    </div> --}}
                                </div>
                                <div class="ml-2 w-full flex-1">
                                    <div>
                                        <div class="mt-3 text-3xl font-bold leading-8">{{ $members->count() }}</div>

                                        <div class="mt-1 text-base text-gray-600">Member</div>
                                    </div>
                                </div>
                            </div>
                          </h1>
                        <h1 class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                            href="#">
                            <div class="p-5">
                                <div class="flex justify-between">
                                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-10 w-10" viewBox="0 0 22 22" fill="currentColor">
                                    <path d="M20,19H4c-0.6,0-1-0.4-1-1V6c0-0.6,0.4-1,1-1h16c0.6,0,1,0.4,1,1v12C21,18.6,20.6,19,20,19z" opacity=".3" class="text-sky-300 group-hover:text-blue-300"></path>>
                                    <path d="M20,20H4c-1.1,0-2-0.9-2-2V6c0-1.1,0.9-2,2-2h16c1.1,0,2,0.9,2,2v12C22,19.1,21.1,20,20,20z M4,6v12h16l0-12H4z"></path>
                                    <path d="M18.3 16L14.5 11 11 15 8.5 12.5 5.8 16z" class="fill-current text-sky-300 group-hover:text-blue-600 dark:group-hover:text-blue-400"></path>
                                    </svg>
                                    {{-- <div
                                        class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                        <span class="flex items-center">30%</span>
                                    </div> --}}
                                </div>
                                <div class="ml-2 w-full flex-1">
                                    <div>
                                        <div class="mt-3 text-3xl font-bold leading-8">{{ $galleries->count() }}</div>

                                        <div class="mt-1 text-base text-gray-600">Foto</div>
                                    </div>
                                </div>
                            </div>
                          </h1>
                        <h1 class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                            href="#">
                            <div class="p-5">
                                <div class="flex justify-between">
                                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-10 w-10" viewBox="0 0 22 22" fill="currentColor">
                                    <path d="M18,3H6C5.448,3,5,3.448,5,4v16c0,0.552,0.448,1,1,1h12c0.552,0,1-0.448,1-1V4C19,3.448,18.552,3,18,3z M12,7c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2s-2-0.895-2-2C10,7.895,10.895,7,12,7z M8,17c0-1.657,1.343-3,3-3h2c1.657,0,3,1.343,3,3H8z" opacity=".3"class="text-sky-300 group-hover:text-blue-300"></path>
                                    <path d="M12 12c1.682 0 3-1.317 3-3s-1.318-3-3-3S9 7.317 9 9 10.318 12 12 12zM12 8c.58 0 1 .421 1 1s-.42 1-1 1-1-.421-1-1S11.42 8 12 8zM12 13c-2.851 0-5 1.455-5 3.384V18h10v-1.616C17 14.455 14.851 13 12 13zM9.146 16c.363-.496 1.384-1 2.854-1s2.49.504 2.854 1H9.146z"></path><path d="M4,20V4c0-1.103,0.897-2,2-2h12c1.103,0,2,0.897,2,2v16c0,1.103-0.897,2-2,2H6C4.897,22,4,21.103,4,20z M18,4H6v16.001L18,20V4z"class="fill-current text-sky-300 group-hover:text-blue-600 dark:group-hover:text-blue-400"></path>
                                    </svg>
                                    {{-- <div
                                        class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                        <span class="flex items-center">30%</span>
                                    </div> --}}
                                </div>
                                <div class="ml-2 w-full flex-1">
                                    <div>
                                        <div class="mt-3 text-3xl font-bold leading-8">{{ $user->count() }}</div>

                                        <div class="mt-1 text-base text-gray-600">Admin</div>
                                    </div>
                                </div>
                            </div>
                          </h1>
                    </div>
                </div>
                {{-- <div class="col-span-12 mt-5">
                    <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                        <div class="bg-white p-4 shadow-lg rounded-lg">
                            <h1 class="font-bold text-base">Table</h1>
                            <div class="mt-4">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto">
                                        <div class="py-2 align-middle inline-block min-w-full">
                                            <div
                                                class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">PRODUCT NAME</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">Stock</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">STATUS</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">ACTION</span>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-gray-200">
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>Apple MacBook Pro 13</p>
                                                                <p class="text-xs text-gray-400">PC & Laptop
                                                                </p>
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>77</p>
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <div class="flex text-green-500">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-5 h-5 mr-1" fill="none"
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                    </svg>
                                                                    <p>Active</p>
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <div class="flex space-x-4">
                                                                    <a href="#" class="text-blue-500 hover:text-blue-600">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-5 h-5 mr-1"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                    </svg>
                                                                    <p>Edit</p>
                                                                    </a>
                                                                    <a href="#" class="text-red-500 hover:text-red-600">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-5 h-5 mr-1 ml-3"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                    </svg>
                                                                    <p>Delete</p>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</main>
</div>

@endsection