<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Exception extends Mailable
{
	use Queueable, SerializesModels;

	public $data;

    /**
     * Create a new message instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
    	$this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	return $this->view('emails.exception')
    	
    	->subject(\Lang::get('mail.exception_subject', [
    		'server' => strtoupper(app()->environment()),
    		'ip' => request()->server('SERVER_ADDR')
    	]))

    	->from(config('luure.developer'))
    	->to(config('luure.developer'))
    	
    	->with([
    		'data' => $this->data,
    	]);
    }
}
