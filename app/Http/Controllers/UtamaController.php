<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
    //
    public function erd(){
        return view('erd');
    }

    public function master(){
        return view('layouts.master');
    }
}
