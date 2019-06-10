<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animals;

class AnimalController extends Controller
{
    function get(){
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
