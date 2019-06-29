<?php

namespace App\Http\Controllers;

use App\Mail\Bid;
use App\Mail\Feedback;
use App\Mail\Send;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail(Request $request)
    {
        \Mail::to('mackinkenny@gmail.com')->send(new Send($request->all()));

        return back();
    }

    public function feedback(Request $request)
    {
        \Mail::to('mackinkenny@gmail.com')->send(new Feedback($request->all()));

        return back();
    }

    public function message(Request $request)
    {
        \Mail::to('mackinkenny@gmail.com')->send(new Bid($request->all()));

        return back();
    }
}
