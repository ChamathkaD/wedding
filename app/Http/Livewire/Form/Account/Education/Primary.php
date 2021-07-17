<?php

namespace App\Http\Livewire\Form\Account\Education;

use App\School;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Primary extends Component
{
    public $school;
    public $from;
    public $to;

    protected $rules = [
        'school' => 'required|string',
        'from' => 'date_format:Y|after:1960',
        'to' => 'date_format:Y|after:1960',
    ];

    public function save()
    {
        $this->validate();

        $data = [
            'user_id' => Auth::id(),
            'school' => $this->school,
            'from' => $this->from,
            'to' => $this->to
        ];

        School::create($data);
        $this->dispatchBrowserEvent('closeSchoolModal');
        $this->clear();
        $this->emit('refreshSchool');
    }

    public function clear()
    {
        $this->school = null;
        $this->from = null;
        $this->to = null;
    }

    public function render()
    {
        return view('livewire.form.account.education.primary');
    }
}
