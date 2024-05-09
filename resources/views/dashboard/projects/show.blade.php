@extends('dashboard.layouts.main')


@section('container')
<section id="project" class="">
    <section class="container mt-10 ml-44 mx-auto flex flex-col justify-center items-center">
      <!-- Projects -->
      <div class="flex justify-between items-center gap-x-6 pb-5">
        <div class="flex justify-start -ml-2 pt-1">
            <a href="/dashboard/projects" class="block bg-emerald-500 p-2 rounded-md text-white">Kembali</a>
        </div>
       {{-- Edit --}}
       <a href="/dashboard/projects/{{ $project->id }}/edit" class="bg-yellow-500 p-2 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"  fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg>
        </a>

        {{-- Delete --}}
        <form action="/dashboard/projects/{{ $project->id }}" method="post">
        @method('delete')
        @csrf
        <button class="bg-red-500 p-2 rounded-xl" onclick="return confirm('Are you sure ?')">
        <a href="" class="">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
        </a>
            </button>
        </form>
    </div>
    <div class="flex flex-wrap justify-center gap-5 lg:gap-0 lg:ml-20">
        <!-- Projects -->
        <div class=" flex flex-wrap justify-center mt-5 md:w-2/5 lg:mb-16 lg:justify-normal lg:w-1/3"
            id="projects">
            <img src="{{ asset('storage/' . $project->image) }}" class="flex w-10/12" alt="about"
                fetchpriotity="high" width="200" height="200">
            <div class="flex flex-col text-left gap-1">
                <h1 class="text-xl font-semibold text-sky-800">{{ $project->projectName }} <span class="text-sky-500">Project </span>
                </h1>
                <h1 class="text-center lg:text-left text-md font-normal text-neutral-400">{!! $project->member->member !!} </h1>
                <div class="flex justify-center lg:justify-start">
                    <div class="w-36 h-10 bg-sky-800 hover:bg-sky-900 flex justify-center">
                        <a href="{{ $project->link }} " class="flex text-white justify-center items-center text-sm">Live
                            Website
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ml-2" width="24"
                                height="24">
                                <path
                                    d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"
                                    fill="rgba(255,255,255,1)"></path>
                            </svg>
    
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
</section>

@endsection






















