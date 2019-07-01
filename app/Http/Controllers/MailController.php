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
        \Mail::to('askar@sa.kg')->send(new Send($request->all()));

        if ($request->ajax()){
            return response()->json("success");
        }

        return back();
    }

    public function feedback(Request $request)
    {
        \Mail::to('askar@sa.kg')->send(new Feedback($request->all()));

        if($request->ajax()){
            return response()->json("success");
        }
        return back();
    }

    public function message(Request $request)
    {
        \Mail::to('askar@sa.kg')->send(new Bid($request->all()));

        if ($request->ajax()){
            return response()->json("success");
        }

        return back();
    }
}
