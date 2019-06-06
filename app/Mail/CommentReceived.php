<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Team;

class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $team;

    public function __construct(team $team)
    {
        $this->team = $team;
    }


    public function build()
    {
        return $this->view('emails.comment-recieved');
    }
    
}


    
