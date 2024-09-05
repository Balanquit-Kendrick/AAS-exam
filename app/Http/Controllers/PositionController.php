<?php

namespace App\Http\Controllers;

use App\Http\Requests\PositionRequest;
use Illuminate\Http\Request;
use App\Models\Position;


class PositionController extends Controller
{
    //
    public function index(){

        $positions = Position::all();
        return $positions;

    }

    public function store(PositionRequest $request){
        
        $positions = new Position();
        $positions->position=$request->input('position');
        $positions->reports_to=$request->input('reports_to');
        
        $positions->save();
    }

    public function update(PositionRequest $request , $id){

        $positions = Position::find($id);

        $positions->position=$request->input('position');
        $positions->reports_to=$request->input('reports_to');

        $positions->save();
    }

    public function delete($id){

        $positions = Position::find($id);

        $positions->delete();
    }

    public function show($id){

        $position = Position::where('id', $id)->select('id', 'position', 'reports_to')->first();

        return response()->json($position);

    }
}

