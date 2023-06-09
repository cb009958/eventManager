<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventForm extends Component
{
    use WithFileUploads;

    public $hotel;

    public $categories;

    public $sub_categories;

    public $image;

    protected $rules = [
        'hotel.category_id' => 'required',
        'hotel.name' => 'required',
        'hotel.description' => 'required',
        'hotel.address' => 'required',
        'hotel.city' => 'required',
        'hotel.country' => 'required',
        'hotel.zip_code' => 'required',
        'hotel.latitude' => 'required',
        'hotel.longitude' => 'required',
        'hotel.phone' => 'required',
        'hotel.email' => 'required',
        'hotel.website' => 'required',
        'hotel.check_in' => 'required',
        'hotel.check_out' => 'required',
        'hotel.price' => 'required',
    ];

    public function mount($hotel)
    {
        $this->event = $event;

        $this->categories = \App\Models\Category::all();

        $this->sub_categories = $this->event->categories()->pluck('id')->toArray();
    }

    public function submit()
    {
        $this->validate();

        $this->event->save();

        if ($this->sub_categories) {
            $this->event->categories()->sync($this->sub_categories);
        }

        if ($this->image) {

            // clear the media collection
            $this->event->clearMediaCollection('image');

            // add the image to the media collection
            $this->event->addMedia($this->image->getRealPath())->toMediaCollection('image');
        }

        return redirect()->route('admin.events.index');
    }

    public function render()
    {
        return view('livewire.event-form');
    }
}
