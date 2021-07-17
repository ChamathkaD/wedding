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

    public function updatedPhoto()
    {
        $this->validate([
            'images.*' => 'required|mimes:png,jpeg,jpg,gif|max:10240',
        ]);
    }

    public function save()
    {
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
        $this->images = array();
    }

    public function render()
    {
        return view('livewire.form.account.gallery');
    }
}
