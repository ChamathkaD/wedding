<?php

namespace App\Http\Livewire\Modal\Account\Education;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Higher extends Component
{
    protected $listeners = ['refreshUniversity' => '$refresh'];

    public function render()
    {
        return view('livewire.modal.account.education.higher', [
            'universities' => Auth::user()->universities
        ]);
    }
}
