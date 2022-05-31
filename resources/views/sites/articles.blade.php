@extends('layouts.essential')
@section('content')
<div class="container flex flex-col w-3/4 mx-auto mt-5">

    @foreach ($pag as $item)
        <div class="w-3/4 mx-auto">
            <h1 class="mb-6 text-3xl text-center font-patua-one">{{ $item->name }}</h1>
            <div class="w-3/4 p-3 mx-auto text-xl tracking-wide font-open-sans indent-0">
                {!! $item->description !!}
            </div>
        </div>



        @foreach ($item->article as $it)
        <div class="flex flex-col w-3/4 mx-auto mt-5">
            <h1 class="mb-6 text-2xl text-center font-patua-one"> {{ $it->order }}  - {{ $it->name }}</h1>
            <figure>
                <img src="{{ asset('storage/articles/'.$it->image) }}" alt="Trulli" class="w-1/2 mx-auto mb-2">
                <figcaption class="mb-4 text-center">{{ $it->caption }}</figcaption>
              </figure>
              <div class="w-3/4 p-4 mx-auto text-xl tracking-wide indent-0 font-open-sans ">
                {!! $it->body !!}
            </div>
        </div>


        @endforeach

    @endforeach


</div>

@endsection
