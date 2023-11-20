<?php

use App\Models\Chirp;
use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new class extends Component {
    public Chirp $chirp;

    #[Rule('required|string|max:255')]
    public string $message;

    public function mount(): void
    {
        $this->message = $this->chirp->message;
    }

    public function update(): void
    {
        $this->authorize('update', $this->chirp);

        $validated = $this->validate();

        $this->chirp->update($validated);

        $this->dispatch('chirp-updated');
    }

    public function cancel(): void
    {
        $this->dispatch('chirp-edit-cancelled');
    }
}; ?>

<div>
    <form wire:submit="update">
        <textarea wire:model="message"
            class="block w-full border-gray-300 dark:border-gray-700 focus:border-indigo-300 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-400 focus:ring-opacity-50 rounded-md shadow-sm dark:bg-gray-800"></textarea>

        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
        <button class="mt-4 dark:text-white" wire:click.prevent="cancel">Cancel</button>
    </form>
</div>
