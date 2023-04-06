<x-app-layout title="Posts List">
    <x-top-card title="Blog Posts 🤨" subtitle="Here's all the blog posts we have come up with!">
    </x-top-card>
    <div class="grid grid-cols-12 gap-6">
        <div x-data="{ tab: 1 }" class="col-span-full bg-white shadow-lg rounded-sm border border-ash-200">
            <header class="px-5 py-2 border-b border-ash-100">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg">All Posts</h2>
                    <a href="{{route('admin.posts.create')}}" class="px-4 py-2 bg-orange-500 rounded text-sm text-white">New</a>
                </div>
            </header>
            <div class="" x-data="modal()">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-ash-700 bg-ash-100">
                            <tr class="font-semibold text-left">
                                <th class="px-2 py-3">S/N</th>
                                <th class="px-2 py-3 whitespace-nowrap">Title</th>
                                <th class="px-2 py-3 whitespace-nowrap">Slug</th>
                                <th class="px-2 py-3 whitespace-nowrap">Featured</th>
                                <th class="px-2 py-3 whitespace-nowrap">Published</th>
                                <th class="px-2 py-3 whitespace-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-ash-100">
                            @foreach($posts as $post)
                            <tr class="hover:bg-ash-100">
                                <td class="p-2 pl-4">{{$loop->iteration}}.</td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-12 h-auto flex-shrink-0 mr-2 sm:mr-3">
                                            <img class="rounded-sm" src="{{$post->image_url}}" alt="Alex Shatov">
                                        </div>
                                        <div class="font-medium text-ash-800">{{$post->title}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">{{$post->slug}}</td>
                                <td class="p-2 whitespace-nowrap">
                                    @if($post->featured)
                                    <svg class="fill-current w-4 h-4 text-green-600" viewBox="0 0 17.837 17.837" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m16.145 2.571c-0.272-0.273-0.718-0.273-0.99 0l-8.235 8.233-4.241-4.27c-0.272-0.274-0.715-0.274-0.989 0l-1.486 1.485c-0.272 0.271-0.272 0.717 0 0.99l6.217 6.258c0.272 0.271 0.715 0.271 0.99 0l10.219-10.22c0.276-0.273 0.276-0.72 0-0.994l-1.485-1.482z"/>
                                    </svg>
                                    @else
                                    <svg class="fill-current w-3 h-3 text-red-500" viewBox="0 0 12.012 12.01" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m7.4158 6.0041 4.3-4.29a1.0041 1.0041 0 1 0-1.42-1.42l-4.29 4.3-4.29-4.3a1.0041 1.0041 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z" />
                                    </svg>
                                    @endif
                                </td>
                                <td class="p-2 whitespace-nowrap">{{$post->published_at ? 'Yes' : 'No'}}</td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{route('blog.show', [ 'slug' => $post->slug ])}}" target="_blank" class="inline-flex bg-green-600 hover:bg-green-700 text-white px-2 py-2 rounded">
                                        <svg class="fill-current w-3 h-3" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m510.98 250.98c-43.569-102.44-143.66-168.63-254.98-168.63s-211.41 66.191-254.98 168.63c-1.364 3.206-1.364 6.827 0 10.033 43.568 102.45 143.65 168.65 254.98 168.65 111.33 0 211.41-66.198 254.98-168.65 1.364-3.206 1.364-6.827 0-10.033zm-254.98 153.05c-99.194 0-188.56-57.922-229.19-148.03 40.635-90.098 130-148.01 229.19-148.01 99.193 0 188.56 57.916 229.19 148.01-40.634 90.107-130 148.03-229.19 148.03z" />
                                            <path d="m256 157.82c-54.134 0-98.174 44.041-98.174 98.174s44.041 98.174 98.174 98.174 98.174-44.04 98.174-98.174-44.041-98.174-98.174-98.174zm0 170.72c-39.998 0-72.54-32.542-72.54-72.54s32.542-72.54 72.54-72.54 72.54 32.542 72.54 72.54-32.542 72.54-72.54 72.54z" />
                                            <path d="m256 203.88c-28.739 0-52.123 23.382-52.123 52.123 0 7.078 5.737 12.817 12.817 12.817s12.817-5.739 12.817-12.817c0-14.606 11.882-26.489 26.489-26.489 7.08 0 12.817-5.739 12.817-12.817 0-7.08-5.739-12.817-12.817-12.817z" />
                                        </svg>
                                    </a>
                                    <a href="{{route('admin.posts.edit', [ 'post' => $post->id ])}}" class="inline-flex bg-ash-800 hover:bg-ash-900 text-white px-2 py-2 rounded">
                                        <svg class="fill-current w-3 h-3" viewBox="0 0 489.7 489.7" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m461.9 145.9 11.5-11.3 2.9-2.8 1.4-1.4c0.6-0.6 1.6-1.6 2.4-2.5 3.3-3.7 6.4-8.9 8-14.1 0.9-2.9 1.4-6.1 1.5-9.1l0.1-3.8c0-1-0.2-1.9-0.6-2.9-1.1-2.4-2.6-5.9-4.4-9.3-1.8-3.5-4-6.8-5.6-8.4-0.5-0.6-1-1.1-1.5-1.4-0.4-0.3-0.8-0.4-1.1-0.5-0.7-0.2-1.3-0.1-1.8 0.1-1 0.6-1.7 1.6-1.8 4.1-0.5 4.4-1.1 10.9-1.1 18.1v1.5 0.6c-0.9 3.1-2.3 6.1-4.3 8.4-2 2.4-4.5 4-7.1 5.8-5.2 3.6-10.4 7.4-15.6 11.4-10.5 7.9-21.1 16.3-31.7 25.2-21.3 17.7-42.8 37.2-63.8 57.4-25.7 24.6-51.3 49.1-77 73.7l-38.9 37.2-9.6 9.3-2.2 2.1s-0.2 0.1-0.3 0.1l-0.6 0.1-25.4 4.9c-17.5 3.5-34.9 6.9-52.4 10.4l-8.4 1.7c3.4-16.5 6.9-33.1 10.3-49.6l5.2-26.3 1.3-6.6 0.6-3.3 0.1-0.4v-0.3c0.1-0.4-0.1 0.5-0.1 0.3s0.2-0.8 0.1-0.4c-0.2 0.6-0.1 0.3-0.1 0.4-0.1 0 0.2-0.5 0.2-0.6l1.5-1.5 2.3-2.4c12.7-12.3 25.5-24.5 38.2-36.8 40.1-39.1 80.2-78.4 119.7-118.1 19.7-19.9 39.3-39.9 58.7-60l7.3-7.6c1.2-1.3 1.9-2 2.3-2.4h0.3c3.4 0.3 6.2 0.6 8.4 1.1 1.1 0.2 2 0.4 2.7 0.7h0.1c-0.2-0.1 0.4 0.2-0.3-0.1h0.1l0.2 0.1 0.6 0.2 3.6 1.5c3 1.3 5.1 2.2 7.9 3.6 5.3 2.7 10.3 5.8 15.1 9.4 21.6 15.9 33.9 37.8 41.7 32.1 3.3-2.6 4.3-9.9 1.1-20.4-3.2-10.4-10.9-24.2-24.9-36.1-6.2-5.3-13-10-20.1-14-1.8-1-3.8-2-5.6-3-2-1.1-3.4-1.6-5.2-2.5l-2.2-1.1-0.9-0.4c-1.2-0.5-2.4-0.9-3.6-1.3-2.4-0.7-4.6-1.3-6.8-1.7-2.1-0.4-4.2-0.8-6.1-1.1l-2.8-0.4-1.6-0.2c-0.9-0.1-1.8-0.2-2.7-0.2-3.6-0.1-7.6 0.5-11.1 1.8s-6.5 3.1-8.8 5c-0.6 0.4-1.2 1-1.9 1.6l-1.4 1.3-14 13.3c-21.2 20.3-42.3 40.9-63 61.7-33.3 33.6-66.2 67.3-99.1 101.3l-49.2 50.9-3.2 3.3c-1.8 1.9-3.3 3.9-4.6 6-1.2 2.1-2.3 4.3-3.1 6.9-1 3.4-0.9 4.1-1.3 5.7l-3.4 17.4-6.9 34.7c-2.8 10.2-5.7 20.4-8.5 30.7l-2.1 7.7-1 3.9-0.5 1.9c-0.2 1-0.6 2.7-0.7 4.1-0.6 5.9 1 13.5 6 19.2 2.4 2.8 5.6 5.1 8.9 6.5s6.7 2.1 10.1 2.2c1 0 2 0 3-0.1l1.6-0.2 0.5-0.1 1.4-0.2 1-0.2 3.9-0.7 7.9-1.3 15.7-2.7c10.5-1.9 21-3.8 31.5-5.7l31.5-6 7.9-1.5c4.6-0.9 10-3 14.5-6.1 1.1-0.8 2.2-1.6 3.1-2.4l1.6-1.4 0.9-0.9 2.9-2.8 5.7-5.6c15.2-15.1 30.5-30.1 45.7-45.2 30.3-30.4 60.6-60.9 90.9-91.3l45.5-45.5 22.9-22.4zm-81.3-111.1c-0.3 0-0.6 0-0.7-0.1l0.7 0.1zm-259.6 318.5c-0.5 0.1 0.1 0 0.4-0.1h0.2l-0.6 0.1z" />
                                            <path d="m400.9 282.4c-4.9-7.7-9 2.3-12.1 17.3-5.2 24.7-8.9 52-11.4 80.8-1.3 14.4-2.3 29.2-3 44.1-0.2 3.7-0.3 7.5-0.5 11.3l-0.2 5.7v1.1-0.6 0.3l-0.1 1.4c-0.1 1.3-0.2 1-0.3 1.3-0.8 3.3-3.4 6.5-6.5 8.1-2 1-3.8 1.4-6.4 1.3l-13.8-0.3-82.6-1.8c-36.7-0.7-73.5-1.3-110.2-2-36.8-0.5-73.6-0.9-110.4-0.9h-0.8l-1.7-0.1c-0.1-0.2 0.5 0 0-0.1-0.6-0.1-1.1-0.4-1.7-0.6-1-0.6-2.1-1.5-2.7-2.5-0.7-1-1-2.2-1.1-3.5l-0.2-13.8c-0.2-18.4-0.5-36.9-0.9-55.4 0.4-18.3 0.7-36.5 1.1-54.8 0.8-58 1.4-115.9 1.2-173.8l-0.1-20.7c0-2 0.7-3.3 2-4.6 0.6-0.6 1.4-1 2.2-1.3 0.4-0.1 0.8-0.2 1.3-0.3h0.3 1.1 2.7l21.7-0.3c28.9-0.5 57.8-1.2 86.6-2.3 32.8-1.2 60-5.8 57.6-14.8-2.2-8.3-25.5-14.4-59.1-15.3-30.2-0.8-60.6-1.6-91-2.4l-17.1-0.3c-1.1 0-1.7-0.1-3.1 0-1.5 0.1-3.1 0.1-4.6 0.3-12.3 1.4-23.8 8.5-30.5 18.9-1.7 2.6-3.1 5.4-4.1 8.3-1.1 3-1.8 5.7-2.3 9.7l-0.1 1.3v0.7l-0.1 1.4v32.1c0.2 48.8 0.8 97.6 1.5 146.4l1.1 73.2 0.9 54.9 0.1 9.1v2.3c0 0.8 0 1.3 0.1 2.6 0.1 2.3 0.4 4.5 0.8 6.8 1.3 8.1 5.3 15.9 11.3 21.7 3 2.9 6.5 5.5 10.3 7.3 3.9 1.8 7.6 3.1 13 3.8l2 0.2 0.5 0.1h1.3l1 0.1 12.3 0.6 16.5 0.7c22 0.9 44 1.6 66 2.1 44.1 1 88.4 1.4 132.7 1.4 22.2 0 44.4-0.1 66.5-0.1l16.6-0.1h6.5l3.6-0.2c4.9-0.5 9.7-1.7 14.2-3.6 9-4 16.6-10.8 21.4-19.3 2.4-4.3 4.1-8.8 5.1-13.7 0.3-1.5 0.5-2.9 0.6-4.4 0.1-0.9 0.1-1.1 0.1-1.5v-1l0.1-2v-3.1c-0.1-44.4-0.1-88.7 0.5-132.9 0.3-8-3.2-20.4-5.7-24.3z" />
                                        </svg>
                                    </a>
                                    <button @click="confirmDelete({{$post->id}}, $dispatch)" class="bg-orange-500 hover:bg-orange-600 text-white px-2 py-2 rounded">
                                        <svg class="fill-current w-3 h-3" viewBox="0 0 12.012 12.01" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m7.4158 6.0041 4.3-4.29a1.0041 1.0041 0 1 0-1.42-1.42l-4.29 4.3-4.29-4.3a1.0041 1.0041 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z" />
                                        </svg>
                                    </button>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <x-modal open="open" title="Confirm Delete">
                    <div class="py-4">Are you sure you want to delete this post?</div>
                    <div class="flex py-2 border-t justify-end">
                        <button @click="deletePost" class="px-4 py-2 rounded bg-orange-500 hover:bg-orange-600 text-white mr-4">Yes</button>
                        <button @click="open = false; $dispatch('body-scroll', {})" class="px-4 py-2 rounded bg-ash-600 hover:bg-ash-700 text-white">Cancel</button>
                    </div>
                </x-modal>
            </div>
        </div>
    </div>
    <script>
        function modal() {
            return {
                open: false,
                id: '',
                confirmDelete(id, $dispatch) {
                    this.id = id
                    this.open = true
                    $dispatch('body-scroll', {})
                },
                deletePost() {
                    const route = '/admin/posts/' + this.id
                    axios.delete(route).then(res => location.reload())
                }
            }
        }
    </script>
</x-app-layout>