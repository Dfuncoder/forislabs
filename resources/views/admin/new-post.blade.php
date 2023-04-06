<x-app-layout title="New Post">
    <x-top-card title="Create a New Blog Post 😎" subtitle="Alright, it's time to get creative. Create something intersting!">
    </x-top-card>
    <div class="grid grid-cols-12 gap-6">
        <div x-data="{ tab: 1 }" class="col-span-full bg-white shadow-lg rounded-sm border border-ash-200">
            <header class="px-5 py-2 border-b border-ash-100">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg">Add New Post</h2>
                </div>
            </header>
            <div class="">
                <form class="px-5 py-2" enctype="multipart/form-data" action="{{route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="mt-4 text-gray-700">
                        <div class="py-2">
                            <label class="font-medium" for="title">Title</label>
                            <input required type="text" name="title" value="{{old('title')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">
                        </div>
                        <div class="py-2">
                            <label class="font-medium" for="emailAddress">Summary</label>
                            <textarea required rows="2" name="summary" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">{{old('summary')}}</textarea>
                        </div>
                        <div class="py-2">
                            <label class="font-medium" for="body">Body</label>
                            <textarea required id="editor" name="body" value="{{old('body')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none"></textarea>
                        </div>
                        <div class="py-2">
                            <label for="toogleButton" class="flex items-center cursor-pointer">
                                <div class="relative pr-4">
                                    <input id="toogleButton"  @if(old('featured')) checked @endif type="checkbox" type="checkbox" name="featured" class="hidden peer"/>
                                    <div class="bg-gray-200 w-12 h-6 rounded-full shadow-inner transition-all duration-300 ease-in-out peer-checked:bg-orange-500"></div>
                                    <div class="absolute top-1 left-1 w-4 h-4 bg-white rounded-full shadow transition-transform duration-300 inset-y-0 peer-checked:translate-x-[150%]"></div>
                                </div>
                                <span class="font-medium">Featured Post
                            </label>
                        </div>
                        <div x-data="showImage()" class="py-2">
                            <label class="font-medium" for="banner">Banner</label>
                            <div class=" md:w-2/3 mx-auto">
                                <div class="flex items-center justify-center w-full mx-auto pb-[56.25%] relative mt-2">
                                    <div class="absolute inset-0 overflow-hidden">
                                        <label for="banner" class="flex flex-col items-center justify-center w-full h-full border-2 border-ash-500 rounded border-dashed hover:bg-ash-200 hover:border-ash-600">
                                            <img id="preview" class="absolute object-cover w-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                            </svg>
                                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                Select a photo</p>
                                        </label>
                                        <input type="file" required class="hidden" id="banner" name="banner" accept="image/*" @change="showPreview(event)" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

        function showImage() {
            return {
                showPreview(event) {
                    if (event.target.files.length > 0) {
                        var src = URL.createObjectURL(event.target.files[0]);
                        var preview = document.getElementById("preview");
                        preview.src = src;
                        preview.style.display = "block";
                    }
                }
            }
        }
    </script>
</x-app-layout>