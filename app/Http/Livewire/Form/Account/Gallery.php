<?php

namespace App\Http\Livewire\Form\Account;

use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Gallery extends Component
{
    use WithFileUploads;

    public $images = [];

    protected $listeners = ['refreshGallery' => '$refresh'];

    protected $rules = [
        'images.*' => 'image|max:1024', // 1MB Max
    ];

    public function save()
    {
        $this->validate();

        if ($this->images) {

            foreach ($this->images as $image) {

                // getting original extension for image
                $extension = $image->getClientOriginalExtension();
                // creating filename for image
                $filename = date("Y_m_d_h_i_s") . "_" . Str::random(10) . "." . $extension;
                $image->storeAs('gallery/', $filename, 'public');

                // save image data in photos
                $photo = new Photo();
                $photo->user_id = Auth::id();
                $photo->photo = $filename;
                $photo->save();
            }

        }

        $this->dispatchBrowserEvent('closeGalleryModal');
        $this->clear();
        $this->emit('refreshGallery');
    }

    public function clear()
    {
        $this->images = null;
    }

    public function render()
    {
        return view('livewire.form.account.gallery');
    }
}
