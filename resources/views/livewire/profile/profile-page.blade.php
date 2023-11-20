<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public User $user;

    /**
     * Mount the component.
     */ 
    public function mount(): void
    {
        if (request()->is('dashboard')) {
            $this->user = auth()->user();
        } else {
            $this->user = User::find(request()->route('id'));
        }
    }
}; ?>

<div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold dark:text-white">{{ $user->name }}</h2>
    <p class="text-gray-600 dark:text-gray-400">Email: {{ $user->email }}</p>
    <p class="text-gray-600 dark:text-gray-400">User ID: {{ $user->id }}</p>
</div>


