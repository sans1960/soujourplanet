<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>




</head>
<body>
    <div class="flex flex-row items-center justify-between p-4 text-xl text-white bg-gray-700 border-b-4 font-patua-one">
        <div class="flex justify-center">
            <img src="{{ asset('img/ll.webp') }}" alt="" width="50">
        </div>
        <div class="flex flex-row items-center justify-around">
          <a href="{{ route('index') }}" class="mr-4">Home</a>
          <a href="{{ route('admin.destinations.index') }}"  class="mr-4">Destinations</a>
          <a href="{{ route('admin.categories.index') }}"  class="mr-4">Categories</a>
          <a href="{{ route('admin.countries.index') }}"  class="mr-4">Countries</a>
          <a href="{{ route('admin.posts.index') }}"  class="mr-4">Posts</a>
          <a href="{{ route('admin.photos.index') }}"  class="mr-4">Images</a>
          <a href="{{ route('admin.locations.index') }}"  class="mr-4">Locations</a>
          <a href="{{ route('admin.pages.index') }}"  class="mr-4">Pages</a>
          <a href="{{ route('admin.articles.index') }}"  class="mr-4">Articles</a>
        </div>
        <div class="flex flex-row ">
            <a href=""  class="mr-4">  {{ Auth::user()->name }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg>
                </button>
            </form>
        </div>

    </div>




@yield('content')








@yield('js')

</body>
</html>
