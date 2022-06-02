@extends('layouts.essential')
@section('content')
<div class="container flex flex-col w-full mx-auto mt-5 md:w-3/4">

    @foreach ($pag as $item)
        <div class="w-full mx-auto md:w-3/4">
            <div class="flex flex-col items-center justify-center max-w-screen-xl p-3 rounded-lg h-80" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('{{ asset('storage/pages/'.$item->image) }}');background-size:cover;">
                <h1 class="text-center text-white text 2xl md:text-5xl font-patua-one">{{ $item->name }}</h1>
            </div>

            <div class="w-full p-3 mx-auto text-xl tracking-wide md:w-3/4 font-open-sans indent-0">
                {!! $item->description !!}
            </div>
        </div>



        @foreach ($item->article as $it)
        <div class="flex flex-col w-full mx-auto mt-5 md:w-3/4">
            <h1 class="mb-6 text-2xl text-center font-patua-one"> {{ $it->order }}. {{ $it->name }}</h1>
            <figure>
                <img src="{{ asset('storage/articles/'.$it->image) }}" alt="Trulli" class="w-full mx-auto mb-2 md:w-2/3">
                <figcaption class="mb-4 text-center">{{ $it->caption }}</figcaption>
              </figure>
              <div class="w-full p-4 mx-auto text-xl tracking-wide md:w-3/4 indent-0 font-open-sans ">
                {!! $it->body !!}
            </div>
        </div>


        @endforeach

    @endforeach


</div>

@endsection
