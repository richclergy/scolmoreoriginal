<?php

namespace App\Http\Livewire;

use App\Jobs\SendMailJob;
use App\Mail\SendMailMailable;
use App\Models\SendMail as ModelsSendMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SendMail extends Component
{
    public $email;
    public $message;

    protected $rules = [
        'email' => 'required|email',
        'message' => 'required|max:140',
    ];

    public function render()
    {
        return view('livewire.send-mail');
    }

    public function formSubmit()
    {
        $this->validate();

        $data = array(
            'name' => auth()->user()->name,
            'email' => $this->email,
            'message' => $this->message
        );

        $mailSent = Mail::to($this->email)->send(new SendMailMailable($data));
        ModelsSendMail::create([
            'email' => $this->email,
            'body' => $this->message,
            'sender' => auth()->user()->name,
            'status' => 'sent'
        ]);
        dispatch(new SendMailJob($data));

        session()->flash('success', 'Message successfully sent');
        $this->reset();
    }
}
