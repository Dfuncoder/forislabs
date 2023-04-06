<x-app-layout title="General Settings">
    <x-top-card title="General Site Settings 💆‍♂️" subtitle="Make some global changes, be careful!!!">
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
                    <input type="hidden" name="type" value="general">
                    <div class="mt-4 text-gray-700 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="font-bold" for="intro_paragraph">Email Address</label>
                            <input type="email" name="email" value="{{settings('email')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">
                        </div>
                        <div>
                            <label class="font-bold" for="intro_paragraph">Phone Number</label>
                            <input type="text" name="phone_number" value="{{settings('phone_number')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">
                        </div>
                        <div>
                            <label class="font-bold" for="intro_paragraph">Facebook Name</label>
                            <input type="text" name="facebook" value="{{settings('facebook')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">
                        </div>
                        <div>
                            <label class="font-bold" for="intro_paragraph">Instagram Name</label>
                            <input type="text" name="instagram" value="{{settings('instagram')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">
                        </div>
                        <div>
                            <label class="font-bold" for="intro_paragraph">Twitter Username</label>
                            <input type="text" name="twitter" value="{{settings('twitter')}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded focus:border-orange-500 focus:ring-0 focus:outline-none">
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
        
    </script>
</x-app-layout>