@extends('layouts.front')
@section('content')
{{-- <div class="container mx-auto p-2 flex justify-start mt-5">
    <a href="{{ URL::previous() }}" class="bg-green-800 px-4 py-2 text-white rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
          </svg>
    </a>
</div> --}}

<div class="container mx-auto border-b-4 border-b-gray-400">

    <div class="flex flex-row flex-wrap justify-around mt-5 text-xs md:text-sm lg:text-base font-open-sans ">

        <a href="" class="m-2 text-2xl font-bold">{{ $country->name }}/{{ $category->name }}</a>



    </div>
</div>

</div>
<div class="container grid w-3/4 grid-cols-1 gap-5 mx-auto mt-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach ($posts as $post)
    <a href="{{ route('posts.post',$post) }}">
        <div class="overflow-hidden rounded-lg shadow-xl">
            <img src="{{ asset('storage/photos/'.$post->photo->image) }}" alt="">
            <p class="m-2 text-gray-500">{{ $post->country->name }}</p>
            <h2  class="m-2 text-lg font-patua-one hover:text-blue-900">{{ $post->title }}</h2>
            <p class="m-2 text-gray-500">{{ $post->category->name }}</p>
        </div>
    </a>
    @endforeach





</div>
<div class="container mx-auto mt-8">
    {!! $posts->links() !!}
</div>
@endsection
