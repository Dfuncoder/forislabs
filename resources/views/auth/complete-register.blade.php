<x-guest-layout title="Complete Registration">
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo theme="dark" class="w-32 h-32 fill-current text-black" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('complete-register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <br>
            <div class="border-white" style="border: 1px solid white; padding: 10px;">
            <h3 class="text-white">For Students Only:</h3>
            <br>
             <!-- Coupon -->
        <div class="w-full px-2 md:w-1/2 relative mb-4">
            <x-label for="Coupon" :value="__('Coupon')" />
    
            <x-input id="Coupon" class="block mt-1 w-full" type="Coupon" name="Coupon" required />
                              
            </div>

            <!-- School -->
            <div class="mt-4">
                <x-label for="school" :value="__('School')" />

                <Select id="school" class="block mt-1 w-full bg-ash-600 text-white"
                                type="text"
                                name="school"
                                required >
                                <option value="">None</option>
                </Select>
            </div>
            
            <!-- Class -->
            <div class="mt-4">
                <x-label for="class" :value="__('Class')" />

                <Select id="class" class="block mt-1 w-full bg-ash-600 text-white"  name="class" required >
                                <option value="">None</option>
                                <option value="">SS1</option>
                                <option value="">SS2</option>
                                <option value="">SS3</option>
                                
                </Select>
            </div>
        </div>
<br>
<!-- Gender -->
<div class="flex flex-wrap">
    <div class="w-full px-2 md:w-1/2 relative mb-4">
    <x-label for="gender" :value="__('gender')" />

    
    <select id="gender" class="block mt-1 w-full bg-ash-600 text-white" name="gender" required >
        <option>Slect a gender</option>
       <option value="">Male</option>
       <option value="">female</option>
</select>
             
    </div>
    <!-- Phone number -->
        <div class="w-full px-2 md:w-1/2 relative mb-4">
        <x-label for="phone number" :value="__('phone number')" />

        <x-input id="phonenumber" class="block mt-1 w-full" type="phonenumber" name="phonenumber" placeholder="phone number" required />
                          
        </div>
    </div>
            <!-- Country -->
            <div class="flex flex-wrap">
                <div class="w-full px-2 md:w-1/2 relative mb-4">
                <x-label for="Country" :value="__('Country')" />

                
                <select id="Country" class="block mt-1 w-full bg-ash-600 text-white" name="country" required >
                    <option>Slect a country</option>
                   @foreach($countries as $country) 
                   <option value="{{$country}}" {{($country==$countries)? 'selected':''}}>{{$country}}</option>
                @endforeach 
            </select>
               
                                
                </div>
                <!-- State -->
                <div class="w-full px-2 md:w-1/2 relative mb-4">
                    <x-label for="state" :value="__('state')" />
    
                    
                    <select id="state" class="block mt-1 w-full bg-ash-600 text-white" name="state" required >
                       <option>Slect a state</option>
                    @foreach($states as $state)     
                    <option value="{{$state}}" {{($state==$states)? 'selected':''}}>{{$state}}</option>    
                    @endforeach
                </select>
            </div>
            </div>
            <!-- Address-->
            <div class="mt-4">
                <x-label for="address" :value="__('address')" />
                <x-input id="address" class="block mt-1 w-full" type="address" name="address" :value="old('address')" required />
            </div>
            <div class="flex items-center justify-end mt-4">
                
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
                        
        </form>
    </x-auth-card>
</x-guest-layout>
