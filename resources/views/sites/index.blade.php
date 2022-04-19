@extends('layouts.essential')
@section('content')
<div class="container flex flex-col w-3/4 mx-auto mt-5">
    <h1 class="text-3xl mb-6 text-center font-patua-one">Pages</h1>
    @foreach ($pages as $page)
    <div class="w-full mb-6 rounded-lg shadow-md lg:flex md:flex shadow-gray-600">
        <img
          class="object-cover w-full md:w-1/2 lg:w-1/3"
          src="{{ asset('storage/pages/'.$page->image) }}"
          alt="image"
        />
        <div class="px-6 py-4">
          <h4 class="mb-3 text-2xl

          font-patua-one tracking-tight ">
            {{ $page->name }}
          </h4>
          <div class="mb-6  leading-normal text-justify ">
            {!! Str::limit($page->description,200) !!}
          </div>
          <div class="flex flex-row justify-between items-center">
            <a
            href="{{ route('sites.articles',$page->slug) }}"
             class=" px-4 py-2 text-white bg-gray-700 mt-5 rounded-md">
             Read more
           </a>
           <p class="text-lg font-patua-one">{{ $page->tag->name }}</p>
           <p>{!! \Carbon\Carbon::parse($page->date)->format('d-m-Y') !!}</p>
          </div>

        </div>
      </div>

    @endforeach

</div>

@endsection
