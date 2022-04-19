<div class="container mx-auto border-b-4 border-b-gray-400">
    <div class="flex flex-row justify-around items-center">
        <a href="{{ route('index') }}" class="m-2 rounded-full p-2 bg-gray-800 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg></a>
        <a class="px-6 py-2 rounded-lg font-patua-one bg-gray-800 text-white" href="{{ route('sites') }}">Essentials</a>
    </div>
    <div class="flex flex-row flex-wrap justify-around mt-5 text-xs md:text-sm lg:text-base font-open-sans ">

        @foreach ($tags as $tag)
        <a href="" class="m-2 ">{{ $tag->name }}</a>
        @endforeach


    </div>
</div>
