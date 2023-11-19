<?php

use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new class extends Component {
    #[Rule('required|string|max:255')]
    public string $message = '';

    public function store(): void
    {
        $validated = $this->validate();

        auth()
            ->user()
            ->chirps()
            ->create($validated);

        $this->message = '';

        $this->dispatch('chirp-created');
    }
}; ?>

<div class="flex justify-center">
    <form wire:submit="store" class="flex flex-col items-end justify-center">
        <textarea wire:model="message" placeholder="{{ __('What\'s on your mind?') }}"
            class="block w-96 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
    </form>
</div>
