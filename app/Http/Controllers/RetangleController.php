<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Retangle;
use Illuminate\Http\Request;

class RetangleController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function createRetangle(Request $request)
    {
        $base = (int)$request->base;
        $height= (int)$request->height;
        if(!$base == 0 && !$height == 0){
            if(!is_int($base) || !is_int($height)){
                return response()->json([
                    'message' => 'Height and base must be integer'
                ],400);
            }else{
                if(!$base <= 0 ||!$height <= 0){
                    $retangle = new Retangle;

                    $retangle->height = $height;
                    $retangle->base = $base;
                    $retangle->area = $base * $height;
                    $retangle->save();
                    return response()->json([
                        'message' => 'Retangle was created with success!'
                    ], 201);
                }return response()->json([
                    'message' => 'Base or Height cannot be negative!'
                ], 400);
            }
        }else{
            return response()->json([
                'message' => 'Base or Height cannot be empty!'
            ], 400);
        }        
    }
}