<x-app-layout title="Simulations">
    <x-top-card title="Simulation Catalog 👻" subtitle="List of all simulations we have so far.">
    </x-top-card>
    <div class="grid grid-cols-12 gap-6">
        <div x-data="{ tab: 1 }" class="col-span-full bg-white shadow-lg rounded-sm border border-ash-200">
            <header class="px-5 py-2 border-b border-ash-100">
                <div class="flex justify-center">
                    @foreach($simulation_groups as $key => $simulations)
                    <button @click="tab = {{$loop->iteration}}" class="border border-solid text-xs border-orange-500 font-bold px-4 py-2 rounded outline-none focus:outline-none mx-1 md:mx-2 ease-linear transition-all duration-150" type="button" :class="{'text-white bg-orange-500' : tab==={{$loop->iteration}}, 'text-orange-500 bg-transparent' : tab!=={{$loop->iteration}}}">
                        {{$key}}
                    </button>
                    @endforeach
                </div>
            </header>
            <div class="">
                @foreach($simulation_groups as $simulations)
                <div class="overflow-x-auto" x-show="tab==={{$loop->iteration}}">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-ash-700 bg-ash-100">
                            <tr class="font-semibold text-left">
                                <th class="px-2 py-3">S/N</th>
                                <th class="px-2 py-3 whitespace-nowrap">Title</th>
                                <th class="px-2 py-3 whitespace-nowrap">Category</th>
                                <th class="px-2 py-3 whitespace-nowrap">Duration</th>
                                <th class="px-2 py-3 whitespace-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-ash-100">
                            @foreach($simulations as $simulation)
                            <tr>
                                <td class="p-2 pl-4">{{$loop->iteration}}.</td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-12 h-auto flex-shrink-0 mr-2 sm:mr-3">
                                            <img class="rounded-sm" src="{{$simulation->banner_url}}" alt="Alex Shatov">
                                        </div>
                                        <div class="font-medium text-ash-800">{{$simulation->title}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">{{$simulation->category->name}}</td>
                                <td class="p-2 whitespace-nowrap">{{$simulation->duration}} mins</td>
                                <td class="p-2 whitespace-nowrap">
                                    <button class="bg-orange-500 text-white px-2 py-2 rounded">I</button>
                                    <button class="bg-red-500 text-white px-2 py-2 rounded">X</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>