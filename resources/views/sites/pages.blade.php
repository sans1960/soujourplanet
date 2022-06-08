@extends('layouts.essential')
@section('content')
<div class="container mx-auto mt-4 flex flex-row justify-around items-center border-b-4 border-b-gray-700 mb-4">
    @foreach ($tags as $tag)
        <a href="{{ route('tags.pages',$tag) }}" class="text-xs md:text-sm lg:text-base font-open-sans mb-4 ">{{ $tag->name }}</a>
    @endforeach

</div>
<div class="container  w-3/4 mx-auto mt-5">
    <h1 class="text-3xl mb-6 text-center font-patua-one">Pages</h1>
    <div class="container grid  grid-cols-1 gap-5 mx-auto mt-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach ($pages as $page)
    <div class="w-full mb-6 flex flex-col rounded-lg shadow-md overflow-hidden  shadow-gray-600">
        <div class="w-full  flex justify-center items-center">
            <img
          class="object-fill"
          src="{{ asset('storage/pages/'.$page->image) }}"
          alt="image"
        />
        </div>

        <div class="px-6 py-4">
          <h4 class="mb-3 text-2xl

          font-patua-one tracking-tight ">
            {{ $page->name }}
          </h4>
          <div class="mb-6  leading-normal text-justify ">
            {!! Str::limit($page->description,100) !!}
          </div>
          <div class="flex flex-col  justify-between items-center">
            <a
            href="{{ route('sites.articles',$page->slug) }}"
             class="text-sm md:text-base px-2 py-1 md:px-4 md:py-2 text-white bg-gray-700 mt-5 rounded-md">
             Read more
           </a>
           <p class="text-lg font-patua-one mt-5">{{ $page->tag->name }}</p>
           <p class="font-patua-one mt-5">{!! \Carbon\Carbon::parse($page->date)->format('F-d-Y') !!}</p>
          </div>

        </div>
      </div>

    @endforeach
    </div>

</div>

@endsection
