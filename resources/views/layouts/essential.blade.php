<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/index.ico') }}" type="image/x-icon">
        <title>Blog</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/social.css') }}">
        <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>
        <nav class="flex items-center justify-center p-3 bg-gray-800">
            <a href="{{route('index')}}">
                <img src="{{ asset('img/ll.png') }}" class="" width="100" alt="">
            </a>
    </nav>
    <div class="flex items-center justify-center text-2xl text-white bg-center h-80" style="background-image: url({{ asset('img/europe.jpg') }});">
        <h1 class="text-6xl tracking-wider font-patua-one">Travel Blog</h1>

    </div>
@include('layouts.tags',['tags'=>$tags=App\Models\Tag::all()])
      @yield('content')
      <footer class="mt-5 bg-slate-800">
        <div class="flex flex-col items-center justify-between p-6 mt-5 text-white md:flex-row font-open-sans">
            <div class="flex flex-col items-center justify-start md:flex-row">
            <p>Copyright © 2021 Sojournplanet - All rights reserved -</p>
                 <a href="https://sojournplanet.com/images-copyright" class="text-gray-300 underline hover:text-white" target="_blank">Images Copyright</a>
            </div>
            <a target="_blank" href="https://www.facebook.com/sojournplanet" class="mt-3 md:mt-0">
              <img src="{{ asset('img/facebook.png') }}" width="40" alt="">
            </a>
        </div>

        <div class="flex flex-col items-center justify-center p-6 mt-5 text-white md:flex-row font-patua-one">
            <a target="_blank" class="hover:text-gray-300" href="https://sojournplanet.com/faqs">FAQs</a>
            <a target="_blank" class="md:ml-5 hover:text-gray-300" href="https://sojournplanet.com/terms-and-conditions">Terms and Conditions</a>
            <a target="_blank" class="md:ml-5 hover:text-gray-300" href="https://sojournplanet.com/privacy-policy">Privacy Policy</a>
        </div>



      </footer>
     @yield('js')
    </body>
</html>
