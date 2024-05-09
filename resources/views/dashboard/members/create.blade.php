@extends('dashboard.layouts.main')

@section('container')
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <div class="px-6 pt-6 2xl:container">
        <h1 class="text-3xl font-semibold text-sky-800 py-3">Tambah Member Baru</h1>
        <hr class="pb-5"></div>
        <div class="flex justify-start ml-4 pb-2">
            <a href="/dashboard/members" class="block bg-emerald-500 p-2 rounded-md text-white">Kembali</a>
        </div>
      <section class="max-w-4xl ml-3 p-6 mx-auto  bg-white rounded-md shadow-md dark:bg-gray-900">
        {{-- <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Formulir untuk membuat member baru</h2> --}}
    
        <form action="/dashboard/members" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                    {{-- Form Image --}}
                    <div class="">
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="image">Image</label>
                            <img class="img-preview w-2/6">
                            <input class=" block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image')
                                is-invalid
                            @enderror" id="image" type="file" name="image" onchange="previewImage()">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file">SVG, PNG, JPG or GIF (MAX. 1 Mb).</p>
                            @error('image')
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                            </label>
                        </div>
                    </div>
                {{-- Form Name --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="member">Member</label>
                    <input id="member" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring @error('member') 
                        is-invalid
                    @enderror" name="member" required autofocus value="{{ old('member') }}">
                    @error('member')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- Form nickname --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="nickname">Nickname</label>
                    <input id="nickname" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring @error('nickname')
                        is-invalid
                    @enderror " name="nickname" required value="{{ old('nickname') }}">
                    @error('nickname')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- Form Quotes --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="quotes">Quotes</label>
                    <input id="quotes" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring @error('quotes')
                        is-invalid
                    @enderror " name="quotes" required value="{{ old('quotes') }}">
                    @error('quotes')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

            </div>
            <div class="flex justify-end mt-6">
                <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-emerald-700 rounded-md hover:bg-emerald-600 focus:outline-none focus:bg-emerald-600">Buat Member</button>
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