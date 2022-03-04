<div>
    {{-- Be like water. --}}
    <form method="POST" wire:submit.prevent="formSubmit" class="space-y-4">

        @csrf

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />

            <x-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            @error('email') <span class="text-sm text-red-600 mt-1">{{ $email }}</span> @enderror
            <x-error for="email" message="{{ $email }}" />
        </div>

        <!-- Message -->
        <div class="mt-3">
            <x-label for="message" :value="__('Message')" />

            <x-textarea wire:model="message" cols="30" rows="10" id="message" class="block mt-1 w-full" name="message" :value="old('message')" required autofocus />
            <x-error for="message" message="{{ $message }}" />
        </div>

        <x-button class="ml-3 mt-3">
            <div wire:target="formSubmit" wire:loading class="mr-2">
                <span>
                    Sending...
                </span>
            </div>
            {{ __('Send') }}
        </x-button>
    
    </form>
</div>
