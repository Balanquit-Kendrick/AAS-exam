<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class ViewController extends Controller
{
   
    public function index(){

        $positions = Position::with('assignTo')->get();
    
        // dd($positions);

        return view('welcome')->with('positions', $positions);
    }
}
