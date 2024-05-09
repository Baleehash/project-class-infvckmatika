<aside
class="fixed top-0 z-10 ml-[-100%] flex h-screen w-full flex-col justify-between border-r bg-white px-6 pb-3 transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%] dark:bg-gray-900 dark:border-sky-700 "
>
<div>
  <div class="flex justify-center">
    <a href="#" title="home">
      <img src="/images/logo.png" class=" w-20" alt="tailus logo" />
    </a>
  </div>

  <div class="mt-8 text-center">
    <img
      src="/images/profil.png"
      alt=""
      class="m-auto h-10 w-10 rounded-full object-cover lg:h-28 lg:w-28"
    />
    <h5 class="mt-4 hidden text-xl font-semibold text-sky-600 lg:block dark:text-sky-300">{{ auth()->user()->name }}</h5>
    <span class="hidden text-sky-400 lg:block">{{ auth()->user()->email }}</span>
  </div>

  <ul class="mt-8 space-y-2 tracking-wide">
    <li>
      <a
        href="/dashboard"
        class="group flex items-center space-x-4 rounded-md px-4 py-3 text-sky-600 dark:text-sky-300 {{ Request::is('dashboard') ? 'bg-sky-950': '' }}"
      >
        <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
          <path
            d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
            class="dark:fill-sky-600 fill-current text-blue-400"
          ></path>
          <path
            d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
            class="fill-current text-blue-200 group-hover:text-blue-300"
          ></path>
          <path
            d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
            class="fill-current group-hover:text-sky-300"s
          ></path>
        </svg>
        <span class="group-hover:text-sky-700 dark:group-hover:text-sky-50">Dashboard</span>
      </a>
    </li>
    <li>
      <a
        href="/dashboard/home"
        class="group flex items-center space-x-4 rounded-md px-4 py-3 text-sky-600 dark:text-sky-300 {{ Request::is('dashboard/home*') ? 'bg-sky-950': '' }}"
      >
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-5 w-5" viewBox="0 0 22 22 "           fill="currentColor"
      >
        <path d="M19,11v9h-5v-6h-4v6H5v-9H3.6L12,3.4l8.4,7.6H19z" opacity=".3" class="text-sky-300 group-hover:text-blue-300"></path>
        <path d="M20,21h-7v-6h-2v6H4v-9H1l11-9.9L23,12h-3V21z M15,19h3v-8.8l-6-5.4l-6,5.4V19h3v-6h6V19z" class="fill-current text-sky-300 group-hover:text-blue-600 dark:group-hover:text-blue-400"></path>
        </svg>
        <span class="group-hover:text-sky-700 dark:group-hover:text-sky-50">Home</span>
      </a>
    </li>
    <li>
      <a
      href="/dashboard/projects"
      class="group flex items-center space-x-4 rounded-md px-4 py-3 text-sky-600 dark:text-sky-300 {{ Request::is('dashboard/projects*') ? 'bg-sky-950': '' }}"
    >
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-5 w-5" viewBox="0 0 22 22"           fill="currentColor"
      >
        <path d="M20,11h-1V6c0-0.6-0.4-1-1-1h-5V4c0-1.1-0.9-2-2-2S9,2.9,9,4v1H4C3.4,5,3,5.4,3,6v5h1c1.1,0,2,0.9,2,2s-0.9,2-2,2H3v5 c0,0.6,0.4,1,1,1h5v-1c0-1.1,0.9-2,2-2s2,0.9,2,2v1h5c0.6,0,1-0.4,1-1v-5h1c1.1,0,2-0.9,2-2S21.1,11,20,11z" opacity=".3" class="text-sky-300 group-hover:text-blue-300"></path>
        
        <path d="M18,22h-6v-2c0-0.6-0.4-1-1-1c-0.6,0-1,0.4-1,1v2H4c-1.1,0-2-0.9-2-2v-6h2c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H2V6 c0-1.1,0.9-2,2-2h4c0-1.7,1.3-3,3-3c1.7,0,3,1.3,3,3h4c1.1,0,2,0.9,2,2v4c1.7,0,3,1.3,3,3c0,1.7-1.3,3-3,3v4 C20,21.1,19.1,22,18,22z M14,20h4v-6h2c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1h-2V6h-6V4c0-0.6-0.4-1-1-1c-0.6,0-1,0.4-1,1v2H4v4 c1.7,0,3,1.3,3,3c0,1.7-1.3,3-3,3v4h4c0-1.7,1.3-3,3-3C12.7,17,14,18.3,14,20z" class="fill-current text-sky-300 group-hover:text-blue-600 dark:group-hover:text-blue-400"></path>
        </svg>
        <span class="group-hover:text-sky-700 dark:group-hover:text-sky-50">Projects</span>
      </a>
    </li>
    <li>
      <a
        href="/dashboard/members"
        class="group flex items-center space-x-4 rounded-md px-4 py-3 text-sky-600 dark:text-sky-300 {{ Request::is('dashboard/members*') ? 'bg-sky-950': '' }}"
      >
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  class="h-5 w-5" viewBox="0 0 22 22"           fill="currentColor"
      >
        <path d="M18.92,9C18.434,5.609,15.526,3,12,3S5.566,5.609,5.08,9H18.92z" opacity=".3" class="text-sky-300 group-hover:text-blue-300"></path>

        <path d="M17,8H7c-1.654,0-3,1.346-3,3v1h2v-1c0-0.551,0.449-1,1-1h10c0.551,0,1,0.449,1,1v1h2v-1C20,9.346,18.654,8,17,8z" ></path>

        <path d="M20,11.767V10c0-4.411-3.589-8-8-8s-8,3.589-8,8v1.767C3.372,12.329,3,13.14,3,14c0,1.276,0.823,2.397,1.992,2.816C6.396,20.028,9.043,22,12,22s5.604-1.972,7.008-5.184C20.177,16.397,21,15.276,21,14C21,13.14,20.628,12.329,20,11.767z M18.137,14.981l-0.585,0.081l-0.211,0.551C16.302,18.319,14.256,20,12,20s-4.302-1.681-5.34-4.386l-0.211-0.551l-0.585-0.081C5.371,14.914,5,14.492,5,14c0-0.36,0.186-0.682,0.498-0.861L6,12.851V10c0-3.309,2.691-6,6-6s6,2.691,6,6v2.851l0.502,0.288C18.814,13.318,19,13.64,19,14C19,14.492,18.629,14.914,18.137,14.981z" class="fill-current text-sky-300 group-hover:text-blue-600 dark:group-hover:text-blue-400"
        ></path>
        </svg>
        <span class="group-hover:text-sky-700 dark:group-hover:text-sky-50">Members</span>
      </a>
    </li>
    <li>
      <a
        href="/dashboard/galleries"
        class="group flex items-center space-x-4 rounded-md px-4 py-3 text-sky-600 dark:text-sky-300 {{ Request::is('dashboard/galleries*') ? 'bg-sky-950': '' }}"
      >
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-5 w-5" viewBox="0 0 22 22" fill="currentColor">
        <path d="M20,19H4c-0.6,0-1-0.4-1-1V6c0-0.6,0.4-1,1-1h16c0.6,0,1,0.4,1,1v12C21,18.6,20.6,19,20,19z" opacity=".3" class="text-sky-300 group-hover:text-blue-300"></path>>
        <path d="M20,20H4c-1.1,0-2-0.9-2-2V6c0-1.1,0.9-2,2-2h16c1.1,0,2,0.9,2,2v12C22,19.1,21.1,20,20,20z M4,6v12h16l0-12H4z"></path>
        <path d="M18.3 16L14.5 11 11 15 8.5 12.5 5.8 16z" class="fill-current text-sky-300 group-hover:text-blue-600 dark:group-hover:text-blue-400"></path>
        </svg>
        <span class="group-hover:text-sky-700 dark:group-hover:text-white">Gallery</span>
      </a>
    </li>
  </ul>
</div>

<div class="-mx-6 flex items-center justify-between border-t px-6 pt-4 dark:border-sky-700">
  <button class="group flex items-center space-x-4 rounded-md px-4 py-3 text-sky-600 dark:text-sky-300">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-6 w-6"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
      />
    </svg>
    {{-- <span class="group-hover:text-sky-700 dark:group-hover:text-white">Logout</span> --}}
    <form action="/logout" method="post" class="block px-4 py-3 text-sm text-white capitalize transition-colors duration-300 transform dark:text-sky-300">
      @csrf
      <button type="submit" class="text-sky-300">                        
          Sign Out
      </button>
  </form>
  </button>
</div>
</aside>