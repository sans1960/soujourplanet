@extends('layouts.essential')
@section('content')
<div class="container mx-auto mt-4 flex flex-row justify-around items-center border-b-4 border-b-gray-700 mb-4">
    @foreach ($tags as $tag)
        <a href="{{ route('tags.pages',$tag) }}" class="text-xs md:text-sm lg:text-base font-open-sans mb-4 ">{{ $tag->name }}</a>
    @endforeach

</div>
<div class="container  w-3/4 mx-auto mt-5">

    <div class="container grid  grid-cols-1 gap-5 mx-auto mt-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach ($pages as $page)
    <a href="{{ route('sites.articles',$page->slug) }}">
        <div class="w-full mb-6 flex flex-col rounded-lg shadow-xl overflow-hidden">
            <div class="w-full  flex justify-center items-center">
                <img
              class="object-fill"
              src="{{ asset('storage/pages/'.$page->image) }}"
              alt="image"
            />
            </div>
            <div class="flex flex-row justify-between items-center p-3">
                <p class="font-patua-one mt-5">{!! \Carbon\Carbon::parse($page->date)->format('F j, Y') !!}</p>
                <p class="text-lg font-patua-one mt-5">{{ $page->tag->name }}</p>
            </div>

            <div class="px-6 py-4">
              <h4 class="mb-3 text-2xl

              font-patua-one tracking-tight ">
                {{ $page->name }}
              </h4>



            </div>
        </div>
    </a>


    @endforeach
    </div>

</div>

@endsection
