<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMailingFormRequest;
use Mail;

class MailingController extends Controller
{
    public function create(CreateMailingFormRequest $request){
        $name = 'Vlad';
        Mail::send('emails.welcome', ['name' => $name], function($m) {
            $m->to('nicuvlad89@gmail.com')
                ->subject('Welcome Welcome');
        });
        return redirect()->route('home');
    }
}
