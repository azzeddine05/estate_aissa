<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExpencesController extends Controller
{
   
    public function index()
    {
        //$events = RendezvSaisie::all();
    }

   
    public function addExpences(Request $request)
    {
         DB::table('expences')->insert(
            [   'id_estate' =>  $request->stateId,
                'libelle' =>  $request->typeDepences,
                'prix' =>$request->priceDepences,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ]

        );
        $data = DB::table('expences')->latest()->first();
        return response ()->json ($data );

    }

}
