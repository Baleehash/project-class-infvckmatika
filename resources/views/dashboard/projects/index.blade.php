@extends('dashboard.layouts.main')


@section('container')
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%] overflow-hidden">
<div class="px-6 pt-6 2xl:container">
  <h1 class="py-3 text-3xl font-semibold text-sky-800">Projects Section</h1>
  <hr class=""></div>

  <section class="container px-4 pt-2 mx-auto">
    <div class="flex py-3 ">
        @if(session()->has('success'))
        <div role="alert" class="relative flex w-9/12 px-4 py-4 mt-3 mr-32 text-base text-white bg-green-500 rounded-lg font-regular">
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

    </div>
        <div class="flex pb-5">
            <div class="flex justify-start pt-1 -ml-2">
                <a href="/dashboard/projects/create" class="block p-2 text-white rounded-md bg-emerald-500">+ Tambah Project Baru</a>
            </div>
            <div class="flex flex-row pt-1 ml-2">
                <a href="/projects" class="block p-2 text-white bg-teal-500 rounded-md">Halaman Project </a>
            </div>
        </div>
    <div class="flex flex-col">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-10">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-sky-950">
                            <tr >
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right  border-e border-neutral-200  dark:border-white/10 text-white dark:text-white">
                                    No
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right  border-e border-neutral-200  dark:border-white/10 text-white dark:text-white">
                                    Image
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right  border-e border-neutral-200  dark:border-white/10 text-white dark:text-white">
                                    Project Name
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right  border-e border-neutral-200  dark:border-white/10 text-white dark:text-white">
                                    Member
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right  border-e border-neutral-200  dark:border-white/10 text-white dark:text-white">
                                    Link
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($projects as $project)
                            <tr>
                                <td class="px-3 py-4 text-sm font-medium text-gray-700 border-e border-neutral-200 dark:border-white/10 dark:text-gray-200 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <span>{{ $loop->iteration }}</span>
                                    </div>
                                </td>
                                <td class="py-4 text-sm text-gray-500 border-e border-neutral-200 dark:border-white/10 dark:text-gray-300">
                                    <img src="{{ asset('storage/' . $project->image) }}" class="w-56">
                                </td>
                                <td class="py-4 text-sm font-medium text-gray-700 border-e border-neutral-200 dark:border-white/10">
                                    <div class="inline-flex items-center px-4 py-1 rounded-full gap-x-2 text-neutral-400">
                                        <h2 class="text-lg font-normal">{{ $project->projectName }}</h2>
                                    </div>
                                </td>
                                <td class="py-4 text-sm font-medium text-gray-700 border-e border-neutral-200 dark:border-white/10">
                                    <div class="inline-flex items-center px-4 py-1 rounded-full gap-x-2 text-neutral-400">
                                        <h2 class="text-lg font-normal">{!! $project->member->member !!}</h2>
                                    </div>
                                </td>
                                <td class="py-4 text-sm font-medium text-gray-700 border-e border-neutral-200 dark:border-white/10">
                                    <div class="inline-flex items-center px-4 py-1 rounded-full scroll text-neutral-400">
                                        <a href="{{ $project->link }} " class="text-lg font-normal">{!! $project->link !!}</a>
                                    </div>
                                </td>

                                <td class="px-8 py-4 text-sm border-e border-neutral-200 dark:border-white/10">
                                    <div class="flex flex-col items-center gap-2"> 
                                        {{-- Eye --}}
                                        <a href="/dashboard/projects/{{ $project->id }}" class="p-2 bg-sky-500 rounded-xl"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor" >
                                                <path d="M12 3A9 9 0 1 0 12 21A9 9 0 1 0 12 3Z" opacity=".3"></path><path d="M13,17h-2v-6h2V17z M13,9h-2V7h2V9z"></path><path d="M12,22C6.5,22,2,17.5,2,12C2,6.5,6.5,2,12,2c5.5,0,10,4.5,10,10C22,17.5,17.5,22,12,22z M12,4c-4.4,0-8,3.6-8,8 c0,4.4,3.6,8,8,8c4.4,0,8-3.6,8-8C20,7.6,16.4,4,12,4z"></path>
                                                </svg>
                                        </a>
                                        {{-- Edit --}}
                                        <a href="/dashboard/projects/{{ $project->id }}/edit" class="p-2 bg-yellow-500 rounded-xl">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor" >
                                                <path d="M18.4,4.4l1.2,1.2L6.2,19H5v-1.2L18.4,4.4 M18.4,2c-0.3,0-0.5,0.1-0.7,0.3L3,17v4h4L21.7,6.3c0.4-0.4,0.4-1,0-1.4l-2.6-2.6 C18.9,2.1,18.7,2,18.4,2L18.4,2z"></path><path d="M15.8 4.3H17.8V9.2H15.8z" transform="rotate(-45.001 16.75 6.75)"></path>
                                                </svg>
                                        </a>
                                        {{-- Delete --}}
                                        <form action="/dashboard/projects/{{ $project->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="p-2 bg-red-500 rounded-xl" onclick="return confirm('Are you sure ?')">
                                        <a href="" class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor" >
                                                <path d="M6 4H18V21H6z" opacity=".3"></path><path d="M11 18H9V7h2V18zM15 18h-2V7h2V18zM4 3H20V5H4z"></path><path d="M17 5L14 2 10 2 7 5z"></path><path d="M17,22H7c-1.1,0-2-0.9-2-2V3h14v17C19,21.1,18.1,22,17,22z M7,5v15h10V5H7z"></path>
                                                </svg>
                                        </a>
                                            </button>
                                        </form>
                            
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
</div>

@endsection