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
        $this->user = Auth::user();
    }
}; ?>

<div>
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
</div>
