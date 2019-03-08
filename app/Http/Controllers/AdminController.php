<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function index()
    {
        if(Session::has('admin'))
        {
            $estates =DB::table('estates')->get();
            return view('back.admin.admin', ['estates' => $estates]);
        }else{
            return redirect(url('error404'));
        }
       

    }

    public function showRentsEstates()
    {
        $estates =DB::table('estates')->where('etat', "rented")->get();
        return view('back.employes.rentsEstates.index', ['estates' => $estates]);

    }

    public function showEstatesForAdminTerms()
    {
        if(Session::has('employe'))
        {
            $userId = Session::get('employe');
        }else{
            $userId = Session::get('admin');

        }
        $estates =DB::table('estates')->where('id_user', $userId)
        ->where('terms', "forAdmin")->get();
        return view('back.admin.estatesAdmin.index', ['estates' => $estates]);

    }

    public function showAllEstatesOffres()
    {
        $userId = Session::get('employe');
        $estates =DB::table('estates')->where('id_user', $userId)
        ->where('terms', "forAdmin")->get();
        return view('back.employes.estates.allEstates', ['estates' => $estates]);

    }

    public function employe(Request $request)
    {
        
        $userId = Session::get('employe');
        $estates =DB::table('estates')->where('id_user', $userId)
        ->where('terms', "forEmploye")
        ->get();
        return view('back.employes.admin', ['estates' => $estates]);

           // return view('back.agenda', compact('calendar_details', 'commercials', 'rappels'));

    }

    
    public function login(Request $request)
    {
        return view('front.login');
    }

    public function indexAddEmploye(Request $request)
    {
        return view('back.admin.employes.addEmploye');

    }

    public function storeAllEmployes()
    {
        $employes = DB::select('SELECT * from users where role="employe"  order by id ASC');
        //dd($data);
     
        return view('back.admin.employes.allEmployes')->with('employes', $employes);
    }

    public function addEmploye(Request $request)
    {
       
         DB::table('users')->insert(
            ['first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => "employe",
                'created_at' => date("Y-m-d H:i:s"),

            ]

        );
        return redirect(url('admin/employes'))->with('status', 'تم إضافة الموضف بنجاح ');

    }

    public function employeTerms($id)
    {
        $employe =DB::table('users')->where('id', $id)->first();
        return view('back.admin.employes.employesTerms')->with('employe', $employe);
    }

    public function enableEstate($id)
    {
        DB::table('estates')
        ->where('id_estate', $id)
        ->update(['etat' =>  "valide"]); 
        return redirect(url('admin'))->with('enableEstate', 'enabled');


        //return view('back.admin.admin', ['estates' => $estates]);

    }
    public function disableEstate($id)
    {
        DB::table('estates')
        ->where('id_estate', $id)
        ->update(['etat' =>  "attente"]);
        return redirect(url('admin'))->with('disableEstate', 'disabled');

    } 

    public function showSettings()
    {
        return view('back.admin.settings.settings');
    }

    public function changeSettings(Request $request)
    {
        $userId = $request->user_id;
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $email = $request->email;
        $password = $request->password;
        echo($userId);
        echo($firstName);

        echo($lastName);

        echo($email);

        echo($password);die;


        DB::table('users')
        ->where('id', $userId)
        ->update(['etat' =>  "attente"]);
        return redirect(url('admin'))->with('disableEstate', 'disabled');

    } 

     public function error404()
    {
        return view('back.admin.error404');
    }
    
   


}
