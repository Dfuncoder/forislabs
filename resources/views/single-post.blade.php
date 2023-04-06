<x-guest-layout :title="$post->title">
    <section>
        <div class="container px-5 lg:px-12 py-16 mx-auto">
            <div class="flex flex-wrap overflow-hidden">
                <div class="w-full overflow-hidden md:w-4/6 md:pr-2 py-4">
                    <div class="mr-2 md:mr-4 ml-2">
                        <div class="pb-10">
                            <div>
                                <img class="w-full h-auto rounded" src="{{$post->image_url}}" alt="">
                                <h2 class="text-gray-900 text-3xl my-5 font-bold">{{$post->title}}</h2>
                                <span class="text-xs text-gray-800 font-thin block mb-5">{{ $post->created_at->format('l, jS F, Y') }}</span>
                                <div class="post-body text-gray-900 font-thin">
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full overflow-hidden md:w-2/6 md:pl-2 py-4">
                    <x-blog-sidebar :posts="$recent_posts"></x-blog-sidebar>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>