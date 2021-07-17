<?php

namespace App\Http\Livewire\Modal\Account\Education;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Primary extends Component
{
    protected $listeners = ['refreshSchool' => '$refresh'];

    public function render()
    {
        return view('livewire.modal.account.education.primary', [
            'schools' => Auth::user()->schools
        ]);
    }
}
