<div class="sticky top-0 z-50 h-16 border-b bg-white dark:bg-gray-900 dark:border-sky-700 lg:py-2.5">
    <div class="flex items-center justify-between space-x-4 px-6 2xl:container">
      <h5 hidden class="text-2xl font-medium text-sky-600 lg:block dark:text-white">Dashboard</h5>
      <button class="-mr-2 h-16 w-12 border-r lg:hidden dark:border-sky-700 dark:text-sky-300">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="my-auto h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"
          />
        </svg>
      </button>
      <div class="flex space-x-4">
        <!--search bar -->
        <div hidden class="md:block">
          <div class="relative flex items-center text-gray-400 focus-within:text-blue-400">
            <span class="absolute left-4 flex h-6 items-center border-r border-gray-300 pr-3 dark:border-gray-700">
              <svg
                xmlns="http://ww50w3.org/2000/svg"
                class="w-4 fill-current"
                viewBox="0 0 35.997 36.004"
              >
                <path
                  id="Icon_awesome-search"
                  data-name="search"
                  d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"
                ></path>
              </svg>
            </span>
            <input
              type="search"
              name="leadingIcon"
              id="leadingIcon"
              placeholder="Search here"
              class="outline-none w-full rounded-xl border border-gray-300 py-2.5 pl-14 pr-4 text-sm text-gray-600 transition focus:border-blue-300 dark:bg-gray-900 dark:border-gray-700"
            />
          </div>
        </div>
        <!--/search bar -->
        <button
          aria-label="search"
          class="h-10 w-10 rounded-xl border bg-gray-100 active:bg-gray-200 md:hidden dark:bg-gray-700 dark:border-gray-600 dark:active:bg-gray-800"
        >
          <svg
            xmlns="http://ww50w3.org/2000/svg"
            class="mx-auto w-4 fill-current text-gray-600 dark:text-gray-300"
            viewBox="0 0 35.997 36.004"
          >
            <path
              id="Icon_awesome-search"
              data-name="search"
              d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"
            ></path>
          </svg>
        </button>
        {{-- <button
          aria-label="chat"
          class="h-10 w-10 rounded-xl border bg-sky-100 active:bg-sky-200 dark:bg-sky-700 dark:border-sky-600 dark:active:bg-sky-800"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="m-auto h-5 w-5 text-sky-600 dark:text-sky-300"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"
            />
          </svg>
        </button>
        <button
          aria-label="notification"
          class="h-10 w-10 rounded-xl border bg-sky-100 active:bg-sky-200 dark:bg-sky-700 dark:border-sky-600 dark:active:bg-sky-800"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="m-auto h-5 w-5 text-sky-600 dark:text-sky-300"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
            />
          </svg>
        </button> --}}
      </div>
    </div>
  </div>