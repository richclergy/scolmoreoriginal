<?php

namespace App\Http\Livewire;

use App\Models\SendMail;
use Livewire\Component;

class ShowSendMail extends Component
{
    public $show_mail;

    public function render()
    {
        $this->show_mail = SendMail::all();
        
        return view('livewire.show-send-mail');
    }
}
