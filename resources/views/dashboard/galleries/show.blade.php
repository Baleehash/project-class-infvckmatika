@extends('dashboard.layouts.main')


@section('container')
<section id="gallery" class="overflow-auto scrollbar-hide">
    <section class="container mt-10 ml-44 mx-auto flex flex-col justify-center items-center ">
      <!-- Gallery -->
      <div class="flex justify-between items-center gap-x-6 pb-5">
        <div class="flex justify-start -ml-2 pt-1">
            <a href="/dashboard/galleries" class="block bg-emerald-500 p-2 rounded-md text-white">Kembali</a>
        </div>
       {{-- Edit --}}
       <a href="/dashboard/galleries/{{ $gallery->id }}/edit" class="bg-yellow-500 p-2 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"  fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg>
        </a>

        {{-- Delete --}}
        <form action="/dashboard/galleries/{{ $gallery->id }}" method="post">
        @method('delete')
        @csrf
        <button class="bg-red-500 p-2 rounded-xl" onclick="return confirm('Are you sure ?')">
        <a href="" class="">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
        </a>
            </button>
        </form>
    </div>
    <div class="flex flex-wrap justify-center mb-10">
        <!-- Galleries -->
        <div class=" flex flex-wrap justify-center mt-5 md:full lg:justify-normal lg:full"
            id="galleries">
            <img src="{{ asset('storage/' . $gallery->image) }}" class="flex w-full" alt="about"
                fetchpriotity="high" width="500" height="500">
            <div class="flex flex-col text-left gap-1">
                <h1 class="text-xl font-semibold text-sky-800">{{ $gallery->alt }} </h1>
            </div>
        </div>
    </div>

    </section>
</section>

@endsection






















