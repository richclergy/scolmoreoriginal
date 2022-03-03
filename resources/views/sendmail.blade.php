<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Send Mail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Message -->
                        <div class="mt-3">
                            <x-label for="message" :value="__('Message')" />

                            <x-textarea id="message" class="block mt-1 w-full" name="message" :value="old('message')" required autofocus />
                        </div>

                        <x-button class="ml-3 mt-3">
                            {{ __('Send') }}
                        </x-button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
