<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscriberController extends Controller
{
    
    public function index(Subscriber $subscribers){

        $subscriber = $subscribers->first();
        dd($subscriber->humanCreatedAt);
        //return response()->json($subscribers->get());
    }

}
