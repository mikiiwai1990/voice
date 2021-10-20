<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopPageController extends Controller
{
    //
    public function showTopPage()
    {
        return view('toppage');
    }
}
