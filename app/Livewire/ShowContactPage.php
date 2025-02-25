<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules  = [
        'name'=> 'required',
        'email'=> 'required|email'
    ];

    public function submit(){
        $this->validate();

        $mailData = [
            'subject' => 'You have receiveda Contact Email',
            'name'=> $this->name,
            'email'=> $this->email,
            'message'=> $this->message,
        ];

        Mail::to('admin@gmail.com')->send(new ContactEmail($mailData));

        session()->flash('success','Thanks for contacting, we will reach out to you as soon as possible');

        $this->redirect('/contact');


    }
    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
