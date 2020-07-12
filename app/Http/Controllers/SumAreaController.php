<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Retangle;
use Illuminate\Http\Request;
use App\Triangle;

class SumAreaController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function sumArea(Request $request)
    {
        $sumAreaRetangle = \DB::table("tbl_retangle")->get()->sum("area");
        $sumAreaTriangle = \DB::table("tbl_triangle")->get()->sum("area");
        if($sumAreaRetangle==0 && $sumAreaTriangle==0){
            return response()->json([
                'message'=>'Dont has triangle and retangle records'
            ],200);
        }
        return response()->json([
            'sumAreaRetangle' => $sumAreaRetangle,
            'sumAreaTriangle' => $sumAreaTriangle,
            'sumOfAreas' => $sumAreaRetangle + $sumAreaTriangle
        ], 200);    
    }
}