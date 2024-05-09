@extends('dashboard.layouts.main')

@section('container')
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <div class="px-6 pt-6 2xl:container">
        <h1 class="text-3xl font-semibold text-sky-800 py-3">Edit Gallery Baru</h1>
        <hr class="pb-5"></div>
        <div class="flex justify-start ml-4 pb-2">
            <a href="/dashboard/galleries" class="block bg-emerald-500 p-2 rounded-md text-white">Kembali</a>
        </div>
      <section class="max-w-4xl ml-3 p-6 mx-auto  bg-white rounded-md shadow-md dark:bg-gray-900">
        {{-- <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Formulir untuk membuat gallery baru</h2> --}}
    
        <form action="/dashboard/galleries/{{ $gallery->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                    {{-- Form Image --}}
                    <div class="">
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="image">Image</label>
                            <input type="hidden" name="oldImage" value="{{ $gallery->image }}">
                            @if ($gallery->image)
                            <img src="{{ asset('storage/' . $gallery->image) }}" class="img-preview w-full" >
                            @else
                            <img class="img-preview w-2/6">
                        @endif
                        <input class=" block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image')
                        is-invalid
                    @enderror" id="image" type="file" name="image" onchange="previewImage()">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image">SVG, PNG or JPG  (MAX. 1 Mb).</p>
                            @error('image')
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                            </label>
                        </div>
                    </div>
                {{-- Form Alternate Text --}}
                <div class="flex flex-col">
                    <label class="text-gray-700 dark:text-gray-200" for="alt">Landscape or Potrait
                    </label>
                    <img src="/images/illustration/potrait-landscape.png" class="w-full" fetchpriotity="low"   
                                width="100" height="100" lazy="load" />
                    <fieldset class="grid grid-cols-2 gap-4">
                        <legend class="sr-only"></legend>
                        <div>
                          <label
                            for="Landscape"
                            class="block cursor-pointer rounded-lg border border-gray-100 bg-gray-900 p-4 text-sm font-medium shadow-sm hover:border-gray-200 has-[:checked]:border-blue-500 has-[:checked]:ring-2 has-[:checked]:ring-blue-500"
                          >
                            <div>
                                {{-- <img src="/images/illustration/landscape.png" class="w-20" fetchpriotity="low"
                                width="100" height="100" lazy="load" /> --}}
                              <p class="mt-1 text-white">Landscape</p>
                            </div>
                      
                            <input
                              type="radio"
                              name="alt"
                              value="Landscape"
                              id="Landscape"
                              class="sr-only"
                              @if ($gallery->alt == 'Landscape')
                              checked
                          @endif
                            />
                          </label>
                        </div>
                      
                        <div>
                          <label
                            for="Potrait"
                            class="block cursor-pointer rounded-lg border border-gray-100 bg-gray-900 p-4 text-sm font-medium shadow-sm hover:border-gray-200 has-[:checked]:border-blue-500 has-[:checked]:ring-2 has-[:checked]:ring-blue-500"
                          >
                          <div>
                            {{-- <img src="/images/illustration/potrait.png" class="w-[15.5rem]" fetchpriotity="low"
                            width="100" height="100" lazy="load" /> --}}
                          <p class="mt-1 text-white">Potrait</p>
                        </div>
                      
                            <input
                              type="radio"
                              name="alt"
                              value="Potrait"
                              id="Potrait"
                              class="sr-only"
                              @if ($gallery->alt == 'Potrait')
                                  checked
                              @endif
                            />
                          </label>
                        </div>
                      </fieldset>
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-emerald-700 rounded-md hover:bg-emerald-600 focus:outline-none focus:bg-emerald-600">Buat Foto</button>
            </div>
        </form>
    </section>


    <script>
        
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFreader =  new FileReader();
            oFreader.readAsDataURL(image.files[0]);

            oFreader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }


    </script>
@endsection