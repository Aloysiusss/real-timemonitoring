<?php

namespace App\Livewire\Guest\Feedback;

use App\Models\Feedback;
use Livewire\Component;
use Livewire\WithFileUploads;


class GuestFeedback extends Component
{

    use WithFileUploads;

    public $data = [
        'name' => null,
        'message' => null,
        'image_path' => null,
    ];

    public function submitFeedback()
    {

        $rules = [
            'data.name' => 'nullable',
            'data.message' => 'required',
            'data.image_path' => 'nullable',
        ];
        $this->validate($rules);



        if ($this->data['image_path']) {
            $this->data['image_path']->storeAs(
                'feedback', //folder
                $this->data['image_path']->getClientOriginalName(), //filename
                'public'  //driver
            );
            $this->data['image_path'] = $this->data['image_path']->getClientOriginalName();
        }


        Feedback::create($this->data);
        $this->reset();
    }

    public function render()
    {
        $feedbacks = Feedback::latest()->get();

        return view('livewire.guest.feedback.guest-feedback', [
            'feedbacks' => $feedbacks,
        ]);
    }
}
