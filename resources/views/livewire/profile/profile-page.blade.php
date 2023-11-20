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

<div> 
    {{$user->name}}
    {{$user->email}}
    {{$user->id}}
</div>
