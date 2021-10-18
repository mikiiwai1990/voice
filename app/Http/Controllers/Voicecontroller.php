<?php

namespace App\Http\Controllers;

use App\voicecontent;
use Illuminate\Http\Request;

class Voicecontroller extends Controller
{
    //
    public function showTimeLinePage()
    {
        $voices =voicecontent::latest()->get();
        return view('timeline', ['voices'=> $voices]);
    }

    public function postvoicecontent(Request $request)
    {
        $validator = $request->validate([
            'voice' =>['required','string','max:280']
        ]);

        voicecontent::create([
            'user_id' => 1,
            'voicecontent_id' => $request -> voice,

        ]);

        return back();

    }
}
