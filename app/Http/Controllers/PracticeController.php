<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function teach(){
        return view('teach');
    }

    public function practice(){
        return view('practice');
    }

    public function test(){
        return view('test');
    }
}
