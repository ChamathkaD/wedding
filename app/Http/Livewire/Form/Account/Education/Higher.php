<?php

namespace App\Http\Livewire\Form\Account\Education;

use App\University;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Higher extends Component
{
    public $university;
    public $degree;
    public $field;
    public $from;
    public $to;
    public $description;

    protected $rules = [
        'university' => 'required|string',
        'degree' => 'required|string',
        'field' => 'string',
        'from' => 'date_format:Y|after:1960',
        'to' => 'date_format:Y|after:1960',
        'description' => 'string',
    ];

    public function save()
    {
        $this->validate();

        $data = [
            'user_id' => Auth::id(),
            'university' => $this->university,
            'degree' => $this->degree,
            'field' => $this->field,
            'from' => $this->from,
            'to' => $this->to,
            'description' => $this->description
        ];

        University::create($data);
        $this->dispatchBrowserEvent('closeUniversityModal');
        $this->clear();
        $this->emit('refreshUniversity');
    }

    public function clear()
    {
        $this->university = null;
        $this->degree = null;
        $this->field = null;
        $this->from = null;
        $this->to = null;
        $this->description = null;
    }

    public function render()
    {
        return view('livewire.form.account.education.higher');
    }
}
