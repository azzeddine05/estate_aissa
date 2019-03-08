<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TenantController extends Controller
{
   
    public function index()
    {
        //$events = RendezvSaisie::all();
    }

    public function addEstate(Request $request)
    {
        return view('back.employes.estates.addEstate');
    }
    public function detailsEstate($id)
    {
        $estate = DB::table('estates')->where('id_estate', $id)->first();
        return view('back.employes.estates.detailsEstate')->with('estate', $estate);
    }

   
    public function add(Request $request)
    {
            
        DB::table('tenants')->insert(
            [   'name' =>$request->nameTenant,
                'number_personal' =>$request->tenantNumber,
                'phone' =>$request->tenantPhone,
                'email' =>$request->tenantEmail,
                'nationality' =>$request->tenantNationality,
               
            ]
         );
         $estateId = $request->stateId;
         $tenantId = DB::getPdo()->lastInsertId();

         DB::table('estates')
         ->where('id_estate', $estateId)
         ->update(['id_tenant' =>  $tenantId]);

         $url =  url()->previous();
         return redirect($url)->with('tenantAdded', 'تم إضافة المستأجر بنجاح');


        

    }

}
