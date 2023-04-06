<x-guest-layout title="Contact Us">
<section class="relative bg-orange-50">
        <div class="absolute z-1 w-full bg-center text-ash-600 bg-cover h-full flex items-center" style="background-image: url('/img/bg-pattern.png');">
        </div>
        <div class="w-full relative z-[2] text-ash-600 min-h-[350px] pt-24 pb-8 ">
            <div class="container max-w-7xl mx-auto flex px-4 md:px-16 py-12 flex-col items-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-ash-800">Contact Us</h1>
                <p class="leading-relaxed">
                    <a href="{{route('home')}}" class="text-orange-500 pr-2">Home</a>
                    <i class="fa text-xs fa-chevron-right pr-2"></i>
                    Contact
                </p>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font relative">
        <div class="px-6 lg:px-12 bg-white  py-12 mx-auto flex sm:flex-nowrap flex-wrap">
            <form class="lg:w-3/5 md:w-1/2  flex flex-col md:ml-auto w-full  mt-8 md:mt-0" method="POST" action="">
                @csrf
                <h2 class="text-gray-900 text-3xl md:text-4xl mb-1 font-bold">Get in touch</h2>
                <p class="leading-relaxed mb-5 text-gray-600">For enquiries, complaints and special requests, please fill the contact form below and send a message. We are always ready to assist you.</p>
                <div class="flex flex-col md:flex-row mb-4 space-x-0 md:space-x-4 space-y-4 md:space-y-0">
                    <div class="relative flex-1">
                        <input required type="text" id="name" placeholder="Name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative flex-1">
                        <input required type="email" id="email" placeholder="Email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="relative mb-4">
                    <input required type="text" id="subject" placeholder="Subject" name="subject" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <textarea required id="message" name="message" placeholder="Message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded-full text-lg">Send Message</button>
                </div>
            </form>
            <div class="lg:w-2/5 md:w-1/2 rounded-lg overflow-hidden sm:ml-10 flex flex-col items-center justify-center relative">
                <div class="relative flex flex-wrap py-6">
                    <!-- <div class="w-full mt-4">
                        <h2 class="font-bold text-2xl text-gray-900">Office Address</h2>
                        <p class="leading-relaxed">14th Floor, Basler Messetrum Messeplatz, 4058 Basel, Switzerland</p>
                    </div> -->
                    <div class="w-full mt-4">
                        <h2 class="font-bold text-2xl text-gray-900">Contact Mail</h2>
                        <a href="mailto:{{settings('email')}}" class="leading-relaxed">{{settings('email')}}</a>
                    </div>
                    <div class="w-full mt-4">
                        <h2 class="font-bold text-2xl text-gray-900">Website</h2>
                        <a href="https://www.forislabs.com" class="leading-relaxed">https://www.forislabs.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="container px-5 lg:px-12 py-12 mx-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2281.259603136396!2d7.598881402457532!3d47.56429078199444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791b9b905521f4d%3A0x9f26806a1af25882!2sBasler%20Messeturm!5e1!3m2!1sen!2sng!4v1633738179957!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section> -->
</x-guest-layout>
