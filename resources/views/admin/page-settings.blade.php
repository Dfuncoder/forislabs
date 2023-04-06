<x-app-layout title="Page Settings">
    <x-top-card title="Frontend Page Settings 🤯" subtitle="Yeah! You've got control over what happens on the frontend">
    </x-top-card>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-full bg-white shadow-lg rounded-sm border border-ash-200">
            <header class="px-5 py-2 border-b border-ash-100">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg">Update Settings</h2>
                </div>
            </header>
            <div class="">
                <form class="px-5 py-2" action="{{route('admin.settings.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="page">
                    <div class="mt-4 text-gray-700">
                        <div class="py-2">
                            <label class="font-bold" for="intro_paragraph">Introduction Paragraph</label>
                            <textarea required id="editor" name="intro_paragraph" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">{{ settings('intro_paragraph') }}</textarea>
                        </div>
                        <div class="py-2">
                            <label class="font-bold" for="intro_paragraph">Our Mission</label>
                            <textarea required name="mission" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">{{ settings('mission') }}</textarea>
                        </div>
                        <div class="py-2">
                            <label class="font-bold" for="intro_paragraph">Our Vision</label>
                            <textarea required name="vision" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">{{ settings('vision') }}</textarea>
                        </div>
                        <div class="py-2" x-data="{ items: {{settings('features')}}, adding: false }">
                            <div class="flex justify-between">
                                <label class="font-bold" for="intro_paragraph">Features</label>
                                <button @click="adding = true" type="button" class="bg-orange-500 text-white rounded w-8 h-8 flex items-center justify-center">+</button>
                            </div>
                            <template x-for="item in items" :key="item">
                                <div class="flex space-x-4 items-center py-2">
                                    <input name="features[]" x-model="item" class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">
                                    <button type="button" @click="items = items.filter(i => i !== item)" class="bg-orange-500 text-xl text-white rounded w-8 h-8 flex items-center justify-center">-</button>
                                </div>
                            </template>
                            <div x-show.transition="adding" @click.away="adding = false">
                                <div class="flex space-x-4 items-center py-2">
                                    <input name="item" x-model="name" @keyup="$refs.ok.disabled = name.length === 0" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">
                                    <button type="button" @click="adding = false" class="rounded w-8 h-8 flex items-center justify-center">
                                        <svg class="fill-current w-3 h-3 text-red-500" viewBox="0 0 12.012 12.01" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m7.4158 6.0041 4.3-4.29a1.0041 1.0041 0 1 0-1.42-1.42l-4.29 4.3-4.29-4.3a1.0041 1.0041 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z" />
                                        </svg>
                                    </button>
                                    <button type="button" @click="adding = false; items.push(name); name = ''" x-ref="ok" class="rounded w-8 h-8 flex items-center justify-center">
                                        <svg class="fill-current w-4 h-4 text-green-600" viewBox="0 0 17.837 17.837" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m16.145 2.571c-0.272-0.273-0.718-0.273-0.99 0l-8.235 8.233-4.241-4.27c-0.272-0.274-0.715-0.274-0.989 0l-1.486 1.485c-0.272 0.271-0.272 0.717 0 0.99l6.217 6.258c0.272 0.271 0.715 0.271 0.99 0l10.219-10.22c0.276-0.273 0.276-0.72 0-0.994l-1.485-1.482z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>