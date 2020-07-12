<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Triangle;
use Illuminate\Http\Request;

class TriangleController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function createTriangle(Request $request)
    {   
        $side = (int)$request->side;
        $base = (int)$request->base;
        
        if(!$base == 0 || !$side == 0){
            if(!is_int($base) || !is_int($side)){
                return response()->json([
                    'message' => 'Height and base must be integer'
                ],400);
            }else{
                if(!$base <= 0 ||!$side <= 0){
                    $triangle = new Triangle;

                    $triangle->side = $side;
                    $triangle->base = $base;
                    $triangle->area = ($base * $side)/2;
                    $triangle->save();
                    return response()->json([
                        'message' => 'Triangle was created with success!'
                    ], 201);
                }
            }
            return response()->json([
                'message' => 'Base or Side cannot be negative!'
            ], 400);
        }else{
            return response()->json([
                'message' => 'Base or Side cannot be empty!'
            ], 400);
        }
    }
}