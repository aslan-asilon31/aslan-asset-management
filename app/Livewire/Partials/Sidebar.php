<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Asesmen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;

class Sidebar extends Component
{
    public string $title = '';

    public $userId;


    public function render()
    {
        return view('livewire.partials.sidebar')
        ->title($this->title);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/login');
    }

}
