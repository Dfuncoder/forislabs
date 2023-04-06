<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}} | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <div class="flex h-screen overflow-hidden" x-data="{ open: false }">
        <aside class="lg:w-64 h-screen">
            <div class="fixed inset-0 bg-ash-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200 opacity-0 pointer-events-none" aria-hidden="true"></div>
            <div :class="{'translate-x-0': open, '-translate-x-64': !open }" class="absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 flex-shrink-0 bg-ash-800 p-4 transition-transform duration-200 ease-in-out">
                <div class="flex justify-between mb-10 pr-3 sm:px-2">
                    <button @click="open = false" class="lg:hidden text-ash-500 hover:text-ash-400" aria-controls="sidebar" aria-expanded="false" style="outline: currentcolor none medium;">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                        </svg>
                    </button>
                    <a aria-current="page" class="block active" href="/" style="outline: currentcolor none medium;">
                        <x-application-logo theme="light" class="w-24"></x-application-logo>
                    </a>
                </div>
                <nav>
                    <h3 class="text-xs uppercase text-ash-500 font-semibold pl-3">Pages</h3>
                    <ul class="mt-3">
                        <x-nav-icons.menu-circles route="admin.dashboard" title="Dashboard" />
                        <x-nav-icons.meter route="admin.simulations" title="Simulations" />
                        <x-nav-icons.box route="admin.posts.index" title="Blog" />
                        <x-nav-icons.people route="admin.team" title="Team" />
                    </ul>
                    <h3 class="text-xs uppercase text-ash-500 font-semibold pl-3 mt-4">Settings</h3>
                    <ul class="mt-3">
                        <x-nav-icons.task-list route="admin.settings.page" title="Page Settings" />
                        <x-nav-icons.gears route="admin.settings.general" title="General Settings" />
                    </ul>
                    <h3 class="text-xs uppercase text-ash-500 font-semibold pl-3 mt-4">Others</h3>
                    <ul class="mt-3">
                        <li class="w-full px-3 py-2 rounded-md hover:bg-ash-900">
                            <button onclick="document.getElementById('logout-form').submit();" class="block text-ash-200 transition duration-150" style="outline: currentcolor none medium;">
                                <div class="flex flex-grow">
                                    <svg class="flex-shrink-0 h-6 w-6 mr-3" viewBox="0 0 24 24">
                                        <path class="fill-current text-ash-400" d="M7 0l6 7H8v10H6V7H1z"></path>
                                        <path class="fill-current text-ash-600" d="M18 7v10h5l-6 7-6-7h5V7z"></path>
                                    </svg>
                                    <span class="text-sm font-medium">Logout</span>
                                </div>
                            </button>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>
            </div>
        </aside>
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <header class="sticky top-0 bg-white border-b border-ash-200 z-30">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 -mb-px">
                        <div class="flex">
                            <button @click="open = !open" class="text-ash-500 hover:text-ash-600 lg:hidden" aria-controls="sidebar" aria-expanded="false" style="outline: currentcolor none medium;">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="5" width="16" height="2"></rect>
                                    <rect x="4" y="11" width="16" height="2"></rect>
                                    <rect x="4" y="17" width="16" height="2"></rect>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <div>
                                <button class="w-8 h-8 flex items-center justify-center bg-ash-100 hover:bg-ash-200 transition duration-150 rounded-full ml-3 false" aria-controls="search-modal" style="outline: currentcolor none medium;">
                                    <span class="sr-only">Search</span>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-current text-ash-500" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                        <path class="fill-current text-ash-400" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                    </svg>
                                </button>
                                <div class="fixed inset-0 bg-ash-900 bg-opacity-30 z-50 transition-opacity" aria-hidden="true" style="display: none;"></div>
                                <div id="search-modal" class="fixed inset-0 z-50 overflow-hidden flex items-start top-20 mb-4 justify-center transform px-4 sm:px-6" role="dialog" aria-modal="true" style="display: none;">
                                    <div class="bg-white overflow-auto max-w-2xl w-full max-h-full rounded shadow-lg">
                                        <form class="border-b border-ash-200">
                                            <div class="relative"><label for="modal-search" class="sr-only">Search</label><input id="modal-search" class="w-full border-0 focus:ring-transparent placeholder-ash-400 appearance-none py-3 pl-10 pr-4" type="search" placeholder="Search Anything…" style="outline: currentcolor none medium;"><button class="absolute inset-0 right-auto group" type="submit" aria-label="Search" style="outline: currentcolor none medium;"><svg class="w-4 h-4 flex-shrink-0 fill-current text-ash-400 group-hover:text-ash-500 ml-4 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                                    </svg></button></div>
                                        </form>
                                        <div class="py-4 px-2">
                                            <div class="mb-3 last:mb-0">
                                                <div class="text-xs font-semibold text-ash-400 uppercase px-2 mb-2">Recent searches</div>
                                                <ul class="text-sm">
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Form Builder - 23 hours on-demand video</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Access Mosaic on mobile and TV</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Product Update - Q4 2021</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Master Digital Marketing Strategy course</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Dedicated forms for products</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg><span>Product Update - Q4 2021</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="mb-3 last:mb-0">
                                                <div class="text-xs font-semibold text-ash-400 uppercase px-2 mb-2">Recent pages</div>
                                                <ul class="text-sm">
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg><span><span class="font-medium text-ash-800 group-hover:text-white">Messages</span> - Conversation / … / Mike Mills</span></a></li>
                                                    <li><a class="flex items-center p-2 text-ash-800 hover:text-white hover:bg-orange-500 rounded group" href="/#0" style="outline: currentcolor none medium;"><svg class="w-4 h-4 fill-current text-ash-400 group-hover:text-white group-hover:text-opacity-50 flex-shrink-0 mr-3" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg><span><span class="font-medium text-ash-800 group-hover:text-white">Messages</span> - Conversation / … / Eva Patrick</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="w-px h-6 bg-ash-200 mx-3">
                            <div class="relative inline-flex">
                                <button class="inline-flex justify-center items-center group" aria-haspopup="true" aria-expanded="false" style="outline: currentcolor none medium;">
                                    <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->profile_img }}" alt="User Image">
                                    <div class="flex items-center truncate">
                                        <span class="truncate ml-2 text-sm font-medium group-hover:text-ash-800">{{ auth()->user()->name }}</span>
                                        <svg class="w-3 h-3 flex-shrink-0 ml-1 fill-current text-ash-400" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white border border-ash-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
                                    <div>
                                        <div class="pt-0.5 pb-2 px-3 mb-1 border-b border-ash-200">
                                            <div class="font-medium text-ash-800">{{ auth()->user()->name }}</div>
                                            <div class="text-xs text-ash-500 italic">Administrator</div>
                                        </div>
                                        <ul>
                                            <li><a class="font-medium text-sm text-orange-500 hover:text-orange-600 flex items-center py-1 px-3" href="/" style="outline: currentcolor none medium;">Settings</a></li>
                                            <li><a class="font-medium text-sm text-orange-500 hover:text-orange-600 flex items-center py-1 px-3" href="/" style="outline: currentcolor none medium;">Sign Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                {{$slot}}
            </main>

            @if (session('status'))
            <x-alert :message="session('message')"></x-alert>
            @endif
        </div>
    </div>
</body>

</html>