<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public User $user;

    public function mount(): void
    {
        $this->user = auth()->user();
    }
}; ?>

<div class="bg-gray-200 min-h-screen py-12 px-4">
    <p>{{$this->user->name}}</p>
</div>
