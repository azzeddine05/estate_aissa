<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RevenuesController extends Controller
{
   
    public function index()
    {
        //$events = RendezvSaisie::all();
    }

   
    public function addRevenues(Request $request)
    {
        DB::table('revenues')->insert(
            [   'id_estate' =>  $request->stateId,
                'libelle' =>  $request->typeRevenue,
                'price' =>$request->priceRevenue,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ]

        );
        $data = DB::table('revenues')->latest()->first();
        return response ()->json ($data );
    }

}
