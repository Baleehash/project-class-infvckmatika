@extends('dashboard.layouts.main')


@section('container')
<section id="member" class="">
    <section class="container mt-10 ml-44 mx-auto flex flex-col justify-center items-center">
      <!-- Members -->
      <div class="flex justify-between items-center gap-x-6 pb-5">
        <div class="flex justify-start -ml-2 pt-1">
            <a href="/dashboard/members" class="block bg-emerald-500 p-2 rounded-md text-white">Kembali</a>
        </div>
       {{-- Edit --}}
       <a href="/dashboard/members/{{ $member->id }}/edit" class="bg-yellow-500 p-2 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"  fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg>
        </a>

        {{-- Delete --}}
        <form action="/dashboard/members/{{ $member->id }}" method="post">
        @method('delete')
        @csrf
        <button class="bg-red-500 p-2 rounded-xl" onclick="return confirm('Are you sure ?')">
        <a href="" class="">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
        </a>
            </button>
        </form>

    </div>
    <div class="relative overflow-hidden w-60 h-80  cursor-pointer text-2xl font-bold bg-gradient-to-bl from-gray-400 via-gray-200 to-slate-100">
      <div class="z-10 absolute w-full h-full peer"></div>
      <div
        class="absolute peer-hover:-top-20 peer-hover:-left-16 peer-hover:w-[140%] peer-hover:h-[140%] -top-32 -left-28 w-32 h-44  bg-sky-800 transition-all duration-500"
      ></div>
      <div
        class="absolute flex flex-col text-xl text-center items-end justify-end peer-hover:right-0 peer-hover:rounded-b-none peer-hover:bottom-0 peer-hover:items-center peer-hover:justify-center peer-hover:w-full peer-hover:h-full -bottom-32 -right-36 w-36 h-44  bg-sky-800 transition-all duration-500 space-y-2 p-2"
      >
      <h4 class="text-lg font-semibold font-poppins text-white">{{ $member->member }}</h4>
      <h4 class="block text-sm text-gray-300 font-normal">{{ $member->nickname }}</h4>
      <p class="mt-4 font-normal text-sm text-white">"{{ $member->quotes }}"</p>
      </div>
      <div class="w-full h-full items-center justify-center flex uppercase">
        <img src="{{ asset('storage/' . $member->image) }}">
      </div>
    </div>

    </section>
</section>

@endsection