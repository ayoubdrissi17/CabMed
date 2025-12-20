<?php

namespace App\Http\Controllers;

class ControllerTest extends Controller
{
    public function patient()
    {
        return view('cabinet');
    }
}