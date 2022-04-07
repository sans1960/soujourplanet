@extends('layouts.front')
@section('content')


<div class="container flex flex-col w-3/5 mx-auto mt-5 mb-5 border-b-4 border-b-gray-700">
    <h1 class="mt-5 mb-5 text-3xl text-center font-patua-one">{{ $post->title }}</h1>
    <div class="flex flex-col items-center justify-center mt-5 mb-5 text-gray-600 md:flex-row font-patua-one">


        <p class="mr-3">{{ $post->country->name }}</p>
        <p>|</p>
        <p class="ml-3">{{ $post->category->name }}</p>
    </div>
    <figure>
        <img class="w-5/6 mx-auto rounded-lg" src="{{ asset('storage/photos/'.$post->photo->image) }}" alt="Trulli" >
        <figcaption class="text-center text-gray-600 font-open-sans">{{ $post->photo->caption }}</figcaption>
      </figure>
     <div class="p-3 tracking-wide text-gray-600 font-open-sans indent-0">
         {!! $post->extract !!}
     </div>
     <div class="p-3 tracking-wide text-gray-600 font-open-sans indent-0">
        {!! $post->body !!}
    </div>
    <div class="mx-auto mt-4 mb-5">
        <a class="px-8 py-2 tracking-wider bg-white border-2 border-gray-900 cursor-pointer rounded-3xl hover:bg-gray-800 hover:text-white font-patua-one" href="{{ route('contact',[$post->slug,$post->subregion_id,$post->country_id]) }}">Start to plan my trip</a>
    </div>
    <div id="map" class="flex justify-center mx-auto" style="width: 100%;height:400px;">

    </div>
<div class="social-share">
    <p>Share this Post with</p>
    {!! Share::currentPage('Share')->facebook()->twitter(); !!}
</div>
</div>

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
<script src="{{ asset('js/leaflet.js') }}"></script>
<script>
    var map = L.map('map').setView([{{ $post->location->latitud }}, {{ $post->location->longitud }}], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env("MAP_KEY") }}' ,{
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,

}).addTo(map);

L.marker([{{ $post->location->latitud }}, {{ $post->location->longitud }}]).addTo(map);
    // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    // .openPopup();
</script>


@endsection

