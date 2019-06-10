<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animals;

class PracticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function teach(){
        return view('teach',
            array("animal" => Animals::inRandomOrder()->get()->first()));
    }

    public function practice(){
        return view('practice',
            array("animal" => Animals::inRandomOrder()->get()->first()));
    }

    public function test(){
        return view('test',
            array("animal" => Animals::inRandomOrder()->get()->first()));
    }

    public function save_score(Request $request){
        return \Auth::User()->scores()->create(array('score' => $request->input('score')));
    }
}
