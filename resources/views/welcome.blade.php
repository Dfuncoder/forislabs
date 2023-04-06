<x-guest-layout title="3d Virtual Science Laboratory">
  <section class="relative bg-orange-50">
    <div class="z-1 text-ash-600 absolute flex h-full w-full items-center bg-cover bg-center"
      style="background-image: url('/img/bg-pattern.png');">
    </div>
    <div class="text-ash-600 bg-whte relative z-[2] flex min-h-screen w-full items-center bg-cover bg-center">
      <div class="container mx-auto flex max-w-7xl flex-col items-center px-4 py-12 md:flex-row md:px-16">
        <div
          class="mb-16 flex flex-col items-center pt-16 text-center md:mb-0 md:w-3/5 md:items-start md:text-left lg:pr-12">
          <h1 class="title-font text-ash-800 mb-4 text-4xl font-black sm:text-5xl">Africa's first <span
              class="text-orange-500">offline</span> 3d virtual <span class="text-orange-500">laboratory</span>
          </h1>
          <p class="mb-8 text-lg font-medium leading-relaxed">Conduct science experiments in a practical, engaging, fun
            and portable environment.</p>
          <div class="flex justify-center">
            <a href="{{route('register')}}"
              class="text-md inline-flex items-center rounded-full border-0 bg-orange-500 py-3 px-8 text-white hover:bg-orange-600 focus:outline-none">
              <span>Create an Account</span>
            </a>
          </div>
        </div>
        <div class="w-5/6 md:w-2/5 lg:max-w-lg">
          <img class="rounded object-cover object-center" alt="hero" src="{{ asset('img/science.svg') }}">
        </div>
      </div>
    </div>
  </section>
  <section class="text-ash-800 bg-white">
    <div class="container mx-auto px-5 py-16 lg:px-12">
      <x-title color="dark">Who we are?</x-title>
      <div class="mb-4 flex flex-col items-center md:flex-row">
        <div class="mb-10 w-full md:mb-0 md:w-2/5 lg:w-full lg:max-w-sm">
          <img class="object-cover object-center" alt="hero" src="{{ asset('/img/labb.jpg') }}">
        </div>
        <div
          class="flex flex-col items-center space-y-2 text-center text-lg leading-7 md:w-3/5 md:items-start md:pl-10 md:text-left lg:flex-grow lg:pl-16">
          {!! settings('intro_paragraph') !!}
        </div>
      </div>
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <div class="rounded bg-orange-50 p-8 shadow">
          <h2 class="mb-6 text-base font-bold uppercase text-orange-600 md:text-lg">Our Vision</h2>
          <p class="text-sm leading-relaxed md:text-base">{{ settings('vision') }}</p>
        </div>
        <div class="rounded bg-blue-50 p-8 shadow">
          <h2 class="mb-6 text-base font-bold uppercase text-blue-600 md:text-lg">Our Mission</h2>
          <p class="text-sm leading-relaxed md:text-base">{{ settings('mission') }}</p>

        </div>
      </div>
    </div>
  </section>
  <section class="relative">
    <div class="text-ash-600 absolute z-[-1] flex h-full w-full items-center bg-cover bg-fixed bg-center"
      style="background-image: url('/img/bg-part.png');">
    </div>
    <div class="container mx-auto px-5 py-16 xl:px-16">
      <div class="flex flex-col items-center md:flex-row">
        <div class="w-full md:w-1/2">
          <img class="w-full rounded object-cover object-center" alt="hero" src="{{ asset('img/macbook.png') }}">
        </div>
        <div class="mb-16 flex w-full flex-col items-center text-center md:mb-0 md:w-1/2 md:items-start md:text-left">
          <h1 class="text-ash-800 mb-4 text-3xl font-extrabold sm:text-4xl">We are unique</h1>
          <p class="mb-4 text-base">Foris Labs is diffent from the conventional laboratories out there in so many ways
          </p>
          <ul class="mb-4 list-inside list-disc text-left">
            @foreach (json_decode(settings('features')) as $feature)
              <li class="flex py-2"><i class="fa fa-long-arrow-alt-right pr-6 text-sm"></i>{{ $feature }}</li>
            @endforeach
          </ul>
          {{-- <div class="flex w-full justify-center py-2 md:justify-start">
            <a href="{{ route('pricing') }}#plans"
              class="hover:bg-ash-800 hover:text-ash-100 text-md inline-flex items-center rounded-full border-0 bg-orange-500 py-3 px-8 text-white transition-colors duration-500 focus:outline-none">
              <span>Join WaitList</span>
            </a>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
  <section class="text-ash-400 bg-ash-800 body-font">
    <div class="container mx-auto flex flex-wrap items-center px-5 py-16">
      <div class="pr-0 md:w-1/3 md:pr-16 lg:w-2/5 lg:pr-0">
        <h1 class="title-font text-3xl font-medium text-white">Join our waitlist now?</h1>
        <p class="mt-4 leading-relaxed">Be the first to be notified about Foris Labs once we launch</p>
      </div>
      <form action="https://forislabs.us17.list-manage.com/subscribe/post?u=0ab19de30eebc4efc1b078a12&amp;id=a29081475a"
        method="POST"
        class="bg-ash-700 mt-10 flex w-full flex-col rounded-lg bg-opacity-50 p-8 md:ml-auto md:mt-0 md:w-2/3 lg:w-3/5">

        @csrf
        <h2 class="title-font mb-5 text-lg font-medium text-white">Please provide your details</h2>
        <div class="flex flex-wrap">
          <div class="w-full px-2 md:w-1/2 relative mb-4">
            <label for="full-name" class="text-ash-400 text-sm leading-7">First Name</label>
            <input type="text" required name="FNAME"
              class="bg-ash-600 border-ash-600 text-ash-100 w-full rounded border bg-opacity-20 py-1 px-3 text-base leading-8 outline-none transition-colors duration-200 ease-in-out focus:border-orange-200 focus:bg-transparent focus:ring-1 focus:ring-orange-600">
          </div>
          <div class="w-full px-2 md:w-1/2 relative mb-4">
            <label for="full-name" class="text-ash-400 text-sm leading-7">Last Name</label>
            <input type="text" required name="LNAME"
              class="bg-ash-600 border-ash-600 text-ash-100 w-full rounded border bg-opacity-20 py-1 px-3 text-base leading-8 outline-none transition-colors duration-200 ease-in-out focus:border-orange-200 focus:bg-transparent focus:ring-1 focus:ring-orange-600">
          </div>
          <div class="w-full px-2 md:w-1/2 relative mb-4">
            <label for="full-name" class="text-ash-400 text-sm leading-7">I am a</label>
            <select name="TYPE" required
              class="bg-ash-600 border-ash-600 text-ash-100 w-full rounded border bg-opacity-20 py-1 px-3 text-base leading-8 outline-none transition-colors duration-200 ease-in-out focus:border-orange-200 focus:bg-transparent focus:ring-1 focus:ring-orange-600">
              <option value="Student">Student</option>
              <option value="Teacher/Instructor">Teacher/Instructor</option>
              <option value="School Administrator">School Administrator</option>
            </select>
          </div>
          <div class="w-full px-2 md:w-1/2 relative mb-4">
            <label for="email" class="text-ash-400 text-sm leading-7">Email</label>
            <input type="email" required id="email" name="EMAIL"
              class="bg-ash-600 border-ash-600 text-ash-100 w-full rounded border bg-opacity-20 py-1 px-3 text-base leading-8 outline-none transition-colors duration-200 ease-in-out focus:border-orange-200 focus:bg-transparent focus:ring-1 focus:ring-orange-600">
          </div>
        </div>
        <button
          class="rounded border-0 bg-orange-500 py-2 px-8 text-lg text-white hover:bg-orange-600 focus:outline-none">Join
          WaitList</button>
        <p class="mt-3 text-xs">By submitting this form, you have agreed to receive notifications from Foris Labs about
          the launch.</p>
      </form>
    </div>
  </section>
  <section>
    <div class="container mx-auto px-5 pt-12 text-center">
      <x-title color="dark">Supported By</x-title>
      <div class="flex">
        <div class="swiper-container relative min-h-[6rem] overflow-hidden" id="container-1">
          <div class="swiper-wrapper">
            <div class="swiper-slide !h-12 !w-auto">
              <img
                class="h-full object-cover object-center grayscale transition duration-500 hover:scale-110 hover:filter-none"
                alt="image" src="{{ asset('img/brands/injini.png') }}">
            </div>
            <div class="swiper-slide !h-12 !w-auto">
              <img
                class="h-full object-cover object-center grayscale transition duration-500 hover:scale-110 hover:filter-none"
                alt="image" src="{{ asset('img/brands/startup-south.png') }}">
            </div>
            <div class="swiper-slide !h-12 !w-auto">
              <img
                class="h-full object-cover object-center grayscale transition duration-500 hover:scale-110 hover:filter-none"
                alt="image" src="{{ asset('img/brands/stanford.png') }}">
            </div>
            <div class="swiper-slide !h-12 !w-auto">
              <img
                class="h-full object-cover object-center grayscale transition duration-500 hover:scale-110 hover:filter-none"
                alt="image" src="{{ asset('img/brands/stemnovo.png') }}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <section class="text-ash-600 body-font">
        <div class="container px-5 py-12 mx-auto text-center">
            <x-title color="dark">Our Numbers</x-title>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full cursor-pointer">
                    <div class="border-2 hover:bg-orange-500 hover:border-orange-500 hover:text-white text-ash-700 border-ash-500 bg-transparent px-4 py-6 rounded-lg">
                        <svg class="w-12 h-12 mb-3 inline-block" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M8 17l4 4 4-4m-4-5v9"></path>
                            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                        </svg>
                        <h2 class="title-font font-bold text-3xl">2.7K</h2>
                        <p class="leading-relaxed">Downloads</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full cursor-pointer">
                    <div class="border-2 hover:bg-orange-500 hover:border-orange-500 hover:text-white text-ash-700 border-ash-500 bg-transparent px-4 py-6 rounded-lg">
                        <svg class="w-12 h-12 mb-3 inline-block" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                        </svg>
                        <h2 class="title-font font-bold text-3xl">1.2K</h2>
                        <p class="leading-relaxed">Users</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full cursor-pointer">
                    <div class="border-2 hover:bg-orange-500 hover:border-orange-500 hover:text-white text-ash-700 border-ash-500 bg-transparent px-4 py-6 rounded-lg">
                        <svg class="w-12 h-12 mb-3 inline-block" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                            <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                        </svg>
                        <h2 class="title-font font-bold text-3xl">74</h2>
                        <p class="leading-relaxed">Simulations</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full cursor-pointer">
                    <div class="border-2 hover:bg-orange-500 hover:border-orange-500 hover:text-white text-ash-700 border-ash-500 bg-transparent px-4 py-6 rounded-lg">
                        <svg class="w-12 h-12 mb-3 inline-block" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <h2 class="title-font font-bold text-3xl">3</h2>
                        <p class="leading-relaxed">Laboratories</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
  {{-- <section class="bg-orange-50 text-ash-800">
        <div class="container px-5 py-16 mx-auto">
            <x-title color="orange">Milestones</x-title>
            <div class="flex flex-col mx-auto p-2 text-orange-50">
                <x-timeline-item title="Lorem ipsum" active>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Vitae, facilis.
                </x-timeline-item>
                <x-timeline-item title="Lorem ipsum">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Vitae, facilis.
                </x-timeline-item>
                <x-timeline-item title="Lorem ipsum">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Vitae, facilis.
                </x-timeline-item>
                <x-timeline-item title="Lorem ipsum" last>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Vitae, facilis.
                </x-timeline-item>
            </div>
        </div>
    </section>
    <section class="text-ash-600 bg-white body-font">
        <div class="container px-5 pt-12 mx-auto text-center">
            <x-title color="dark">Testimonials</x-title>
            <p class="mb-8">Don't take our word for it. Here's what others think about Foris Labs</p>
            <div class="swiper-container relative overflow-hidden h-full" id="container-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide p-4">
                        <div class="bg-orange-50 shadow p-8 rounded mb-8">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-orange-500 mb-4" viewBox="0 0 975.036 975.036">
                                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                </svg>
                                <div class="flex">
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                </div>
                            </div>
                            <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-black">Alec Lightwood</span>
                                    <span class="text-ash-00 text-sm">CEO, Another Company</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide p-4">
                        <div class="bg-blue-50 shadow p-8 rounded mb-8">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-orange-500 mb-4" viewBox="0 0 975.036 975.036">
                                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                </svg>
                                <div class="flex">
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-ash-500"></i>
                                </div>
                            </div>
                            <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-black">Christopher Njoku</span>
                                    <span class="text-ash-700 text-sm">Manager, St Alfred High School</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide p-4">
                        <div class="bg-orange-50 shadow p-8 rounded mb-8">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-orange-500 mb-4" viewBox="0 0 975.036 975.036">
                                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                </svg>
                                <div class="flex">
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                </div>
                            </div>
                            <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-black">Alec Lightwood</span>
                                    <span class="text-ash-00 text-sm">CEO, Another Company</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide p-4">
                        <div class="bg-blue-50 shadow p-8 rounded mb-8">
                            <div class="flex justify-between">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-orange-500 mb-4" viewBox="0 0 975.036 975.036">
                                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                </svg>
                                <div class="flex">
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-orange-500"></i>
                                    <i class="fa fa-star text-ash-500"></i>
                                </div>
                            </div>
                            <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-black">Alper Kamu</span>
                                    <span class="text-ash-700 text-sm">Marketer, A cool company</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="pagination-2"></div>
            </div>
        </div>
    </section> --}}
  <section class="text-ash-600 body-font bg-white">
    <div class="container mx-auto px-5 py-12 text-center">
      <x-title color="dark">Meet Our Team</x-title>
      <div class="flex flex-wrap justify-around">
        @foreach ($members as $member)
          <div class="w-full p-3 md:w-1/2 lg:w-1/3">
            <div class="mt-8 overflow-hidden rounded-lg text-center shadow-md">
              <div class="team-image relative">
                <img class="h-80 w-full object-cover object-center" src="{{ asset($member->profile_img) }}"
                  alt="Team">
                <div class="absolute top-0 h-80 w-full bg-black/20"></div>
                <div class="absolute inset-x-0 bottom-4 flex justify-center">
                  <ul
                    class="text-md relative z-10 flex rounded-full bg-white/25 px-6 py-4 text-white hover:bg-orange-500">
                    <li class="px-4 transition-transform duration-300 hover:scale-125">
                      <a href="{{ $member->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="px-4 transition-transform duration-300 hover:scale-125">
                      <a href="https://twitter.com/{{ $member->twitter }}" target="_blank"><i
                          class="fab fa-twitter"></i></a>
                    </li>
                    <li class="px-4 transition-transform duration-300 hover:scale-125">
                      <a href="{{ $member->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="px-4 transition-transform duration-300 hover:scale-125">
                      <a href="{{ $member->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-8">
                <h5 class="text-ash-900 mb-1 text-xl font-bold capitalize">{{ $member->name }}</h5>
                <p>{{ $member->position }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</x-guest-layout>

<script type="module">
  const swiper = new Swiper('#container-1', {
    spaceBetween: 20,
    speed: 6000,
    loop: true,
    autoplay: {
      delay: 0.1
    },
    slidesPerView: 'auto',
    disableOnInteraction: true,
    allowTouchMove: false
  })

  const swiper2 = new Swiper('#container-2', {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
      delay: 5000,
    },
    pagination: {
      el: '#pagination-2',
      bulletActiveClass: '!bg-orange-500 !opacity-100'
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 40
      }
    }
  })
</script>
