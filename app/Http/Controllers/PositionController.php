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
        
        $success = $positions->save();

        if($success){

            return redirect('/')->with($success, 'Position saved successfully');

        }else{

            return redirect('/')->with($success, 'Error creating position');

        }

    }

    public function update(PositionRequest $request , $id){

        $positions = Position::find($id);

        if (!$position) {
            return redirect('/')->with('error', 'Position not found.');
        }
        
        $positions->position=$request->input('position');
        $positions->reports_to=$request->input('reports_to');

        $success = $positions->save();

        if($success){

            return redirect('/')->with($success, 'Position saved successfully');

        }else{

            return redirect('/')->with($success, 'Error creating position');

        }
    }

    public function delete($id){

        $positions = Position::find($id);

        $success = $positions->delete();

        if($success){

            return redirect('/')->with($success, 'Position saved successfully');

        }else{

            return redirect('/')->with($success, 'Error creating position');

        }
    }

    public function show($id){

        $position = Position::where('id', $id)->select('id', 'position', 'reports_to')->first();

        return response()->json($position);

    }
}

