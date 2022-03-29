@extends('layouts.formulario')
@section('content')

    @foreach ($country as $item)
    <div class="flex flex-col items-center justify-center w-full h-screen text-4xl font-bold text-white font-patua-one" style="background-image: url('{{asset('storage/country/'.$item->head)}}');background-size:cover;background-repeat:no-repeat;background-position:center;">
        <h1>Thanks {{ $data['trait'] }} {{ $data['name'] }} {{ $data['surname'] }}</h1>
        <h1>Your interest for: {{ $data['subregion'] }}</h1>
        <h1>Soon recived ours notices</h1>
        <a class="px-8 py-2 tracking-wider bg-white border-2 border-gray-900 cursor-pointer rounded-3xl hover:bg-gray-800 hover:text-white font-patua-one" href="{{ route('index') }}">
         Home
        </a>

    </div>
    @endforeach




@endsection
