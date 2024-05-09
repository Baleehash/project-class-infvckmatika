    <!-- The Navigation Bar Section START -->
    <header class="w-full bg-white absolute flex top-0 left-0 items-center z-30" id="navnav">
        <div class="container mx-auto md:mx-auto lg:mx-auto">
            <div class="flex items-center justify-start relative bg-white pb-4">
                <div class="px-4 pt-8 block z-40">
                    <a href="/" class="">
                        <img src="/images/logo.webp" alt="" class="block w-2/5">
                    </a>
                    {{-- <a href="/"
                        class="text-sky-500 font-bold text-2xl  lg:text-2xl after:content-['>'] after:text-sky-800 before:content-['</'] before:text-sky-800">Infvckmatika
                    </a> --}}
                </div>
                <nav id="nav-menu"
                    class="absolute bg-white w-full top-0 mt-0 left-0 text-center h-screen text-2xl sm:p-10  lg:static lg:block lg:text-base font-medium lg:mt-0 lg:h-0 lg:scale-x-100 scale-x-0 origin-left transition duration-200 text-sky-800  lg:text-sky-800">
                    <ul class=" flex flex-col gap-8 lg:flex-row lg:justify-end pt-32 md:pt-20 lg:pt-0">
                        <li class="group lg:block flex justify-center" id="nav-a"><a href="/"
                                class="group-hover:text-sky-500 mb-5 block ">Home</a>
                        </li>
                        <li class="group lg:block flex justify-center" id="nav-a"><a href="/projects"
                                class="group-hover:text-sky-500 mb-5 block  ">Project</a>
                        </li>
                        <li class="group lg:block flex justify-center" id="nav-a"><a href="/members"
                                class="group-hover:text-sky-500 mb-5 block  ">Members</a>
                        </li>
                        <li class="group lg:block flex justify-center" id="nav-a"><a href="/gallery"
                                class="group-hover:text-sky-500 mb-5 block  ">Gallery</a>
                        </li>
                        <li class="group lg:block flex justify-center" id="nav-a"><a
                                href="mailto:infvckmatika@gmail.com"
                                class="group-hover:text-sky-500 mb-5 block">Contact</a>
                        </li>
                        <li class="group lg:block flex justify-center" id="nav-a"><a
                                class="group-hover:text-sky-500 mb-5 block">|</a>
                        </li>
                    @auth
                    <div x-data="{ isOpen: false }" class="relative inline-block ">
                        <!-- Dropdown toggle button -->
                        <button @click="isOpen = !isOpen" class="relative z-10 flex items-center p-2 text-sm text-neutral-600 bg-white border border-transparent rounded-md focus:border-sky-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-sky-300 dark:focus:ring-sky-400 focus:ring dark:text-white dark:bg-neutral-800 focus:outline-none pb-1">
                            <span class="mx-1">Admin</span>
                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z" fill="currentColor"></path>
                            </svg>
                        </button>
                    
                        <!-- Dropdown menu -->
                        <div x-show="isOpen" 
                            @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute right-0 z-20 w-[15.5rem] mt-2 overflow-hidden origin-top-right bg-white rounded-md shadow-xl dark:bg-neutral-800"
                        >
                            {{-- <a href="/dashboard" class="flex items-center p-4 -mt-2 text-sm text-sky-800 transition-colors duration-300 transform dark:text-sky-300 hover:bg-sky-100 dark:hover:bg-sky-700 dark:hover:text-white">
                                <img class="flex-shrink-0 object-cover rounded-full w-9 h-9" src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200" alt="jane avatar">
                                <div class="mx-1">
                                    <h1 class="text-sm font-semibold text-sky-700 dark:text-sky-200">{{ auth()->user()->name }}</h1>
                                    <p class="text-sm text-sky-500 dark:text-sky-400">{{ auth()->user()->email }}</p>
                                </div>
                            </a>
                     --}}
                            <hr class="border-sky-200 dark:border-sky-700 ">
                    
                            <a href="/dashboard" class="block px-4 py-3 text-sm text-sky-600 capitalize transition-colors duration-300 transform dark:text-sky-300 hover:bg-sky-100 dark:hover:bg-sky-700 dark:hover:text-white">
                                Dashboard
                            </a>
    
                            <form action="/logout" method="post" class="block px-4 py-3 text-sm text-white capitalize transition-colors duration-300 transform dark:text-sky-300 hover:bg-sky-100 dark:hover:bg-sky-700 dark:hover:text-white">
                                @csrf
                                <button type="submit" class="text-sky-300">                        
                                    Sign Out
                                </button>
                            </form>
    
                        </div>
                    </div>
                    @else
                    <li class="group lg:block flex justify-center" id="nav-a"><a href="/register"
                        class="group-hover:text-sky-500 mb-5 block  ">Register</a>
                    </li>
                    <li class="group lg:block flex justify-center" id="nav-a"><a href="/login"
                    class="group-hover:text-sky-500 mb-5 block">Login</a>
                    </li>
                    @endauth
                </ul>

                </nav>
                <div class="flex items-center px-4 pt-8 lg:hidden ">
                    <button id="hamburger" name="hamburger" class="block absolute right-4">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- The Navigation Bar Section END -->
