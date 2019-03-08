<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReportsController extends Controller
{
   
    public function index()
    {
        $reports = DB::table('reports')
        ->join('estates', 'estates.id_estate', '=', 'reports.id_estate')
        ->join('purchasers', 'reports.id_purchaser', '=', 'purchasers.id_purchaser')
        ->select('reports.*', 'estates.*',  'purchasers.*')
        //->where('estates.id_estate', $id)
        //->orderBy('expences.id_expence', 'desc')
        ->get();
        return view('back.reports.show', ['reports' => $reports]);
    }

    public function showReportInvoice()
    {
        return view('back.reports.reportInvoice');
    }

   

}
