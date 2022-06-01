<div class="container mx-auto border-b-4 border-b-gray-400">

    <div class="flex flex-row flex-wrap justify-around mt-5 text-xs md:text-sm lg:text-base font-open-sans ">

        @foreach ($tags as $tag)
        <a href="" class="m-2 ">{{ $tag->name }}</a>
        @endforeach


    </div>
</div>
