<?php

namespace App\Http\Livewire\Modal\Account;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
class Gallery extends Component
{
    protected $listeners = ['refreshGallery' => '$refresh'];

    public function render()
    {
        return view('livewire.modal.account.gallery', [
            'photos' => Auth::user()->photos
        ]);
    }
}
