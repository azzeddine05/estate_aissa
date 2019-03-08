<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;



class HomeController extends Controller
{
    protected $language;
   
    public function __construct()
    {
        
        $this->language = \App::getLocale();
    }


    public function index(Request $request)
    {
        $lang = Session::get ('locale');
        if ($lang != null) \App::setLocale($lang);
       
        $estates =DB::table('estates')
        ->where('estates.etat', 'valide')
        ->get();
        return view('front.index', ['estates' => $estates]);  
    }

    public function detailsEstate($id)
    {
        $estate = DB::table('estates')->where('id_estate', $id)->first();
        $tenant = DB::table('tenants')
            ->join('estates', 'estates.id_tenant', '=', 'tenants.id_tenant')
            ->select('tenants.*', 'estates.*')
            ->where('estates.id_estate', $id)
            ->get();

        $images =DB::table('images')
        ->join('estates', 'estates.id_estate', '=', 'images.id_estate')
        ->select('images.*')
        ->where('estates.id_estate', $id)
        ->get();
        
        return view('front.estate.details', compact('estate', 'tenant', 'images'));

    } 

}
