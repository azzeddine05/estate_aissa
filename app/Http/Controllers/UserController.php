<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    // public function index(Request $request)
    // {
    //     return view('back/login');
    // }
    public function login(Request $request)
    {
        // $user = Operateur::select('email', 'password')
        //     ->where('email', $request->email)
        //     ->where('password', $request->password)
        //     ->get();
        $user = DB::table('users')->where([
            ['first_name', '=', $request->email],
            ['password', '=', $request->password],

        ])->First();
        if(!$user){
            echo 0;die;
        }
      
        if ($user->role == "employe") {
            //return redirect(url('login'))->with('status', 'Email ou Password Incorect.');
            $idUser = $user->id;
            Session::put('employe', $idUser);
            Session::put('name', $user->first_name." ".$user->last_name);
            echo 1;
        } else if ($user->role == "admin") {
            $idAdmin = $user->id;
            Session::put('admin', $idAdmin);
            Session::put('name', $user->first_name." ".$user->last_name);
            echo 2;
        } 

    }
}
