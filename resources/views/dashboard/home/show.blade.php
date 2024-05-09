@extends('dashboard.layouts.main')


@section('container')
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%] overflow-hidden">
    <div class="px-6 pt-6 2xl:container">
      <h1 class="text-3xl font-semibold text-sky-800 py-3">Hero Section</h1>
      <hr class="pb-5"></div>
<section id="hero" class="pt-2">
    <div class="container mx-auto md:mx-auto md:px-4 lg:mx-auto">
        @foreach ($homes as $home)
        <div class="flex flex-wrap text-center lg:text-left">
            <div class="w-full self-start px-4 mb-10 lg:mb-0 lg:w-1/2">
                <div class="flex gap-5">
                {{-- Back --}}
        <div class="flex items-center pb-8 "> 
            <a href="/dashboard/home" class="bg-sky-500 p-2 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor" >
                    <path d="M19,11v9h-5v-6h-4v6H5v-9H3.6L12,3.4l8.4,7.6H19z" opacity=".3">
                        </path><path d="M20,21h-7v-6h-2v6H4v-9H1l11-9.9L23,12h-3V21z M15,19h3v-8.8l-6-5.4l-6,5.4V19h3v-6h6V19z"></path>
                    </svg>
                    <a href="/dashboard/home" class="ml-3 text-neutral-700">Back
                    </a>
                </a>
        </div>
                {{-- Demo --}}
        <div class="flex items-center pb-8 "> 
            <a href="/" class="bg-sky-500 p-2 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor" >
                    <path d="M18.2,11.2l-6.2-1V3c0-0.6-0.4-1-1-1h-1C9.4,2,9,2.4,9,3v7v4v1.2l-3.1-1.4c-0.6-0.3-1.2-0.1-1.6,0.3L3.4,15l5.4,5.4 c0.4,0.4,0.9,0.6,1.4,0.6H17c1.1,0,2-0.9,2-2v-6.8C19,11.7,18.6,11.3,18.2,11.2z" opacity=".3"></path><path d="M17,22h-6.8c-0.8,0-1.6-0.3-2.1-0.9L2,15l1.6-1.6c0.7-0.8,1.8-1,2.8-0.5L8,13.6V3c0-1.1,0.9-2,2-2h1c1.1,0,2,0.9,2,2v6.3 l5.3,0.9c1,0.2,1.7,1,1.7,2V19C20,20.7,18.7,22,17,22z M4.8,15l4.7,4.7C9.7,19.9,10,20,10.2,20H17c0.6,0,1-0.4,1-1v-6.8v0L11,11V3 h-1v13.8l-4.5-2.1c-0.2-0.1-0.4,0-0.5,0.1L4.8,15z"></path>
                    </svg>
                    <a href="/" class="ml-3 text-neutral-700">Demo
                    </a>
                </a>
        </div>
    </div>

                <h1 class="text-6xl text-sky-500 font-bold mb-4 py-1 leading-[4rem] " id="hero-text">{{ $home->hero_title }}
                    <br>
                </h1>
                <div class="text-neutral-500 mb-5 text-center lg:text-justify" id="hero-text">
                    <p class="">{!! $home->hero_text !!} </p>
                </div>
                <div class="flex justify-center lg:justify-start" id="hero-text">
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 flex" id="hero-img">
                <div class="container flex items-start justify-center">
                    @if ($home->hero_image)
                    <img src="{{ asset('storage/' . $home->hero_image) }}" alt="hero" fetchpriotity="high" width="400"
                        height="400" class="w-md mx-auto ml-5 md:w-4/5 md:ml-20 lg:ml-36">
                        @else
                        <img src="/images/hero.webp" alt="hero" fetchpriotity="high" width="400"
                            height="400" class="w-md mx-auto ml-5 md:w-4/5 md:ml-20 lg:ml-36">
                    @endif
                </div>
            </div>
        </div>
        {{-- About --}}
        <div class="container mx-auto md:mx-auto md:px-4 lg:mx-auto ">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 flex flex-col p-5 lg:pt-20">
                    <h1 class="text-3xl text-center lg:text-left lg:text-5xl font-semibold text-sky-500">
                        {{ $home->about_title }}
                    </h1>
                    <div class="text-neutral-500 mb-5 text-center lg:text-justify" id="hero-text">
                        <p class="">{!! $home->about_text !!} </p>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 flex" id="hero-img">
                    <div class="container flex items-start justify-center">
                        @if ($home->about_image)
                        <img src="{{ asset('storage/' . $home->about_image) }}" alt="hero" fetchpriotity="high" width="400"
                            height="400" class="w-md mx-auto ml-5 md:w-4/5 md:ml-20 lg:ml-36">
                            @else
                            <img src="/images/about.PNG" alt="hero" fetchpriotity="high" width="400"
                                height="400" class="w-md mx-auto ml-5 md:w-4/5 md:ml-20 lg:ml-36">
                        @endif
                    </div>
                </div>
            </div>

        </div>
        </div>

    </div>
    @endforeach
</section>
@endsection