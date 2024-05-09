@extends('dashboard.layouts.main')


@section('container')
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <div class="px-6 pt-6 2xl:container">
        <h1 class="text-3xl font-semibold text-sky-800 py-3">Edit Section</h1>
        <hr class="pb-5"></div>
        <section class="max-w-4xl ml-3 p-6 mx-auto  bg-white rounded-md shadow-md dark:bg-gray-900">
        <div class="container mx-auto md:mx-auto md:px-4 lg:mx-auto">
            <form action="/dashboard/home/{{ $home->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="pb-8">
                    {{-- Hero Image --}}
                    <div>
                        <label class="text-gray-700 dark:text-white font-semibold pb-3 block" for="file"> Hero Image File</label>
                        <input type="hidden" name="oldImage" value="{{ $home->hero_image }}">
                        @if ($home->hero_image) 
                        <img src="{{ asset('storage/' . $home->hero_image) }}" class="img-preview w-2/6" >
                        @else
                        <img class="img-preview w-2/6" >
                    @endif
                        <input class=" block w-1/4 text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 @error('hero_image') is-invalid @enderror" id="hero_image" type="file" name="hero_image" onchange="previewImage()">
                            <p class="mt-1 text-sm text-gray-500 dark:text-white" id="file">SVG, PNG or JPG  (MAX. 1 Mb).</p>
                        @error('hero_image')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                        </label>
                    </div>
                    {{-- Hero Title --}}
                    <div>
                        <label class="text-gray-700 dark:text-white font-semibold pb-3 block" for="hero_title">Hero Title</label>
                        <input id="hero_title" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-white dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring @error('hero_title') 
                            is-invalid
                        @enderror" name="hero_title" required autofocus value="{{ old('hero_title', $home->hero_title) }}">
                    </div>
                    @error('title')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                    {{-- Hero Text --}}
                    <div>
                        <label class="text-gray-700 dark:text-white font-semibold pb-3 block pt-2" for="hero_text">Hero Text</label>
                        @error('hero_text')
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                        <input id="hero_text" type="hidden" name="hero_text" required value="{{ old('hero_text',$home->hero_text) }}" >
                        <trix-editor input="hero_text" class="text-white "></trix-editor>    
                    </div>
                </div>
                {{-- About --}}
                <div>
                    {{-- About Image --}}
                    <div>
                        <label class="text-gray-700 dark:text-white font-semibold pb-3 block" for="file"> About Image File</label>
                        <input type="hidden" name="oldImageAbout" value="{{ $home->about_image }}">
                        @if ($home->about_image) 
                        <img src="{{ asset('storage/' . $home->about_image) }}" class="img-preview-about w-2/6" >
                        @else
                        <img class="img-preview-about w-2/6" >
                    @endif
                        <input class=" block w-1/4 text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 @error('about_image') is-invalid @enderror" id="about_image" type="file" name="about_image" onchange="previewImageAbout()">
                            <p class="mt-1 text-sm text-gray-500 dark:text-white" id="file">SVG, PNG or JPG  (MAX. 1 Mb).</p>
                        @error('about_image')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                        </label>
                    </div>

                    {{-- About Title --}}
                <div>
                    <label class="text-gray-700 dark:text-white font-semibold pb-3 block" for="about_title">About Title</label>
                    <input id="about_title" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-white dark:text-black dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring @error('about_title') 
                        is-invalid
                    @enderror" name="about_title" required autofocus value="{{ old('about_title', $home->about_title) }}">
                </div>
                @error('title')
                <p class="text-red-500">
                    {{ $message }}
                </p>
                @enderror
                    {{-- About Text --}}
                <div>
                    <label class="text-gray-700 dark:text-white font-semibold pb-3 block" for="about_text">About Text</label>
                    @error('about_text')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                    <input id="about_text" type="hidden" name="about_text" required value="{{ old('about_text',$home->about_text) }}" >
                    <trix-editor input="about_text" class="text-white"></trix-editor>    
                </div>
            </div>
        </div>
            <div class="flex flex-row-reverse mt-6">
                <button class="p-2 text-white transition-colors duration-300 transform bg-sky-800 rounded-md hover:bg-sky-500 focus:outline-none focus:bg-sky-500">Edit Blog</button>
            </div>
            </form>
        </section>

        </div>        
        <script>
            document.addEventListener('trix-file-accept', function() {
            e.preventDefault();
            });

            function previewImage() {

                const hero_image = document.querySelector('#hero_image');
                // const about_image = document.querySelector('#about_image');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(hero_image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }

            }

            function previewImageAbout() {

                const about_image = document.querySelector('#about_image');
                const imgPreview = document.querySelector('.img-preview-about');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(about_image.files[0]);

                oFReader.onload = function(oFREvent) {  
                    imgPreview.src = oFREvent.target.result;
                }

            }

        </script>
@endsection