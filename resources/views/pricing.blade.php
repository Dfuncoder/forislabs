<x-guest-layout title="Pricing">
    <section>
        <div class="w-full bg-center text-white bg-cover min-h-[350px] pt-24 pb-8 " style="background-image: url('/img/header-bg.png');">
            <div class="container max-w-7xl mx-auto flex px-4 md:px-16 py-12 flex-col items-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Pricing</h1>
                <p class="leading-relaxed">
                    <a href="{{route('home')}}">Home</a>
                    <i class="fa text-xs fa-chevron-right"></i>
                    Pricing
                </p>
            </div>
        </div>
    </section>
    <section class="py-20 2xl:py-40 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="max-w-5xl mx-auto">
                <div class="flex flex-wrap items-center -mx-5">
                    <div class="w-full lg:w-1/2 px-5 mb-20 lg:mb-0">
                        <div class="max-w-md">
                            <h2 class="mt-12 mb-10 text-4xl font-bold font-heading">Start your experiments without problems</h2>
                            <p class="mb-16 text-xl text-gray-500">Get our free mobile application.</p>
                            <a class="inline-block px-8 py-4 text-white font-bold bg-orange-500 hover:bg-orange-600 rounded-full transition duration-200" href="{{route('simulations')}}">View Simulations</a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-5">
                        <ul>
                            <li class="flex pb-10 mb-8 border-b border-gray-50">
                                <div class="mr-8">
                                    <span class="flex justify-center items-center w-14 h-14 bg-blue-50 text-md font-bold rounded-full">1</span>
                                </div>
                                <div class="max-w-xs">
                                    <h3 class="mb-6 text-md font-bold font-heading">Register account</h3>
                                    <p class="ttext-base">It’s over, maecenas tincidunt malesuada dolor sit amet malesuada.</p>
                                </div>
                            </li>
                            <li class="flex pb-10 mb-8 border-b border-gray-50">
                                <div class="mr-8">
                                    <span class="flex justify-center items-center w-14 h-14 bg-blue-50 text-md font-bold rounded-full">2</span>
                                </div>
                                <div class="max-w-xs">
                                    <h3 class="mb-6 text-md font-bold font-heading">Customize tools</h3>
                                    <p class="text-base">The brown me quam, sagittis porttitor lorem vel, commodo fringilla nisl.</p>
                                </div>
                            </li>
                            <li class="flex pb-10 border-b border-gray-50">
                                <div class="mr-8">
                                    <span class="flex justify-center items-center w-14 h-14 bg-blue-50 text-md font-bold rounded-full">3</span>
                                </div>
                                <div class="max-w-xs">
                                    <h3 class="mb-6 text-md font-bold font-heading">Work with your team</h3>
                                    <p class="text-base">The time, this accumsan augue, posuere posuere elit lorem.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-ash-800" id="plans">
        <div class="py-12 mx-auto px-4">
            <div class="text-center">
                <x-title color="light">Choose a plan</x-title>
            </div>
            <div class="md:px-16 lg:px-4 mx-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                        <div class="px-4 py-6 bg-ash-500 rounded-xl">
                            <div class="pb-8 mb-14 border-b border-ash-400">
                                <div class="flex justify-between items-center px-3">
                                    <h3 class="text-4xl text-white font-bold font-heading">Single</h3>
                                    <p class="text-md text-white font-bold">$3,00</p>
                                </div>
                            </div>
                            <ul class="text-md text-white mb-16">
                                <li class="flex items-center mb-8">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>Complete files</span>
                                </li>
                                <li class="flex items-center mb-8">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>10GB cloud storage</span>
                                </li>
                                <li class="flex items-center">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>5 team members</span>
                                </li>
                            </ul>
                            <div class="text-center"><a class="inline-block px-10 py-4 border border-ash-200 hover:border-ash-100 rounded-full font-bold text-white" href="#">Try free</a></div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                        <div class="px-4 py-6 bg-orange-500 rounded-xl">
                            <div class="pb-8 mb-14 border-b border-ash-300">
                                <div class="flex justify-between items-center px-3">
                                    <h3 class="text-4xl text-white font-bold font-heading">Team</h3>
                                    <p class="text-md text-white font-bold">$9,99</p>
                                </div>
                            </div>
                            <ul class="text-md text-white mb-16">
                                <li class="flex items-center mb-8">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>Complete files</span>
                                </li>
                                <li class="flex items-center mb-8">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>100GB cloud storage</span>
                                </li>
                                <li class="flex items-center mb-8">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>20 team members</span>
                                </li>
                                <li class="flex items-center mb-8">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>Unlimited anonymous board editors</span>
                                </li>
                            </ul>
                            <div class="text-center"><a class="inline-block px-10 py-4 border border-ash-300 hover:border-blueash-100 rounded-full font-bold text-white" href="#">Buy now</a></div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 px-4">
                        <div class="px-4 py-6 bg-ash-500 rounded-xl">
                            <div class="pb-8 mb-14 border-b border-ash-400">
                                <div class="flex justify-between items-center px-3">
                                    <h3 class="text-4xl text-white font-bold font-heading">Premium</h3>
                                    <p class="text-md text-white font-bold">$29,99</p>
                                </div>
                            </div>
                            <ul class="text-md text-white mb-16">
                                <li class="flex items-center mb-8">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>Complete files</span>
                                </li>
                                <li class="flex items-center mb-8">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>20GB cloud storage</span>
                                </li>
                                <li class="flex items-center">
                                    <span class="mr-6">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>200+ team members</span>
                                </li>
                            </ul>
                            <div class="text-center"><a class="inline-block px-10 py-4 border border-ash-200 hover:border-ash-100 rounded-full font-bold text-white" href="#">Buy now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>