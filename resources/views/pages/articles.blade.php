@extends('layouts.front')
@section('content')
<div class="container  w-3/4 mx-auto mt-5 flex flex-col">

    @foreach ($pag as $item)
        <div>
            <h1 class="text-2xl text-center font-patua-one mb-6">{{ $item->title }}</h1>
            <figure>
                <img src="{{ asset('storage/pages/'.$item->image) }}" alt="Trulli" class="w-1/2 mx-auto mb-4">
                <figcaption class="text-center mb-4">{{ $item->caption }}</figcaption>
              </figure>
        </div>
        <div class="p-3 text-lg font-open-sans border-b-4 border-b-gray-400">
            {!! $item->body !!}
        </div>


        @foreach ($item->article as $it)
        <div>
            <h1 class="text-2xl text-center font-patua-one mb-6">{{ $it->title }}</h1>
            <figure>
                <img src="{{ asset('storage/articles/'.$it->image) }}" alt="Trulli" class="w-1/2 mx-auto mb-4">
                <figcaption class="text-center mb-4">{{ $it->caption }}</figcaption>
              </figure>
        </div>
        <div class="p-3 text-lg font-open-sans border-b-4 border-b-gray-400 w-3/4 mx-auto">
            {!! $it->body !!}
        </div>

        @endforeach

    @endforeach


</div>

@endsection
