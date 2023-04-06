<x-guest-layout title="News Blog">
    <section class="relative bg-white">
        <div class="absolute z-1 w-full bg-center text-ash-600 bg-cover h-full flex items-center" style="background-image: url('/img/bg-pattern.png');">
        </div>
        <div class="w-full relative z-[2] text-ash-600 min-h-[250px] pt-24 pb-8 ">
            <div class="container max-w-7xl mx-auto flex px-4 md:px-16 py-12 flex-col items-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-ash-800">News and Events</h1>
                <p class="leading-relaxed">
                    <a href="{{route('home')}}" class="text-orange-500 pr-2">Home</a>
                    <i class="fa text-xs fa-chevron-right pr-2"></i>
                    Blog
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-5 lg:px-12 py-16 mx-auto">
            <div class="flex flex-wrap overflow-hidden">
                <div class="w-full overflow-hidden md:w-4/6 md:pr-2 py-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                        @foreach($posts as $post)
                        @if($loop->first)
                        <div class="col-span-1 md:col-span-2 flex flex-col md:flex-row shadow rounded-lg overflow-hidden">
                            <div class="">
                                <img src="{{$post->image_url}}" alt="" class="h-auto w-full md:h-full md:w-auto object-cover z-1">
                            </div>
                            <div class="flex-grow h-full bg-blue-50 py-8 px-4">
                                <h2 class="text-blue-500 hover:text-blue-600 font-bold text-2xl"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                                <span class="text-xs text-gray-800 font-thin block mb-5">{{ $post->created_at->format('l, jS F, Y') }}</span>
                                <p class="text-gray-900 font-thin tracking-wider leading-relaxed">{{ $post->summary }}</p>
                                <a href="{{ route('blog.show', $post->slug) }}" class="inline-block pt-5 text-sm font-medium tracking-wider text-blue-500 hover:text-blue-600">Read More &rarr;</a>
                            </div>
                        </div>
                        @else
                        <div class="col-span-1 overflow-hidden shadow rounded @if($loop->iteration % 2 == 0) bg-orange-50 @else bg-blue-50 @endif">
                            <img class="w-full h-auto rounded" src="{{$post->image_url}}" alt="">
                            <div class="p-4">
                                <h2 class="@if($loop->iteration % 2 == 0) text-orange-500 hover:text-orange-600 @else text-blue-500 hover:text-blue-600 @endif font-bold text-2xl"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                                <span class="text-xs text-gray-800 font-thin block mb-5">{{ $post->created_at->format('l, jS F, Y') }}</span>
                                <p class="text-gray-900 font-thin tracking-wider leading-relaxed">{{ $post->summary }}</p>
                                <a href="{{ route('blog.show', $post->slug) }}" class="inline-block pt-5 text-sm font-medium tracking-wider @if($loop->iteration % 2 == 0) text-orange-500 hover:text-orange-600 @else text-blue-500 hover:text-blue-600 @endif">Read More &rarr;</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    {{ $posts->links() }}
                </div>

                <div class="w-full overflow-hidden md:w-2/6 md:pl-2 py-4">
                    <x-blog-sidebar :posts="$older"></x-blog-sidebar>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>