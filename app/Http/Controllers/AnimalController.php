<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animals;

class AnimalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function get_animal(){
        return Animals::inRandomOrder()->get()->first();
    }

    function check(Request $request){
        return Animals::where(
            array(
                'id' => $request->input('id'),
                'name' => $request->input('name')
            ))
            ->get()
            ->count();
    }
}
