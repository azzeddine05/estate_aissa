<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EstateController extends Controller
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
        $tenant = DB::table('tenants')
            ->join('estates', 'estates.id_tenant', '=', 'tenants.id_tenant')
            ->select('tenants.*', 'estates.*')
            ->where('estates.id_estate', $id)
            ->get();

        $expences = DB::table('expences')
        ->join('estates', 'estates.id_estate', '=', 'expences.id_estate')
        ->select('expences.*')
        ->where('estates.id_estate', $id)
        ->orderBy('expences.id_expence', 'desc')
        ->get();

        $revenues = DB::table('revenues')
        ->join('estates', 'estates.id_estate', '=', 'revenues.id_estate')
        ->select('revenues.*')
        ->orderBy('revenues.id_revenue', 'desc')
        ->where('estates.id_estate', $id)
        ->get();

        //return view('back.employes.estates.detailsEstate')->with('estate', $estate);
        return view('back.employes.estates.detailsEstate', compact('estate', 'tenant', 'expences', 'revenues'));

    }

   
    public function createEstate(Request $request)
    {
     
        if(Session::has('admin'))
        {
            $userId = Session::get('admin');
        }else if(Session::has('employe'))
        {
            $userId = Session::get('employe');

        }

        // if($request->hasFile('image1')){
        //     $image1 = $request->file('image1');
        //     $input['imagename0'] = "P".time().'.'.$image1->getClientOriginalExtension();
        //     $destinationPath = public_path('/images');
        //     $image1->move($destinationPath,  $input['imagename0']);
            
        
        //   };
     
        DB::table('estates')->insert(
            ['id_user' =>  $userId,
                'terms' =>$request->estatePermition,
                'rentorBuy' =>$request->typeV,
                'type' =>$request->typeEstate,
                'appartmentNum' =>$request->appartmentNum,
                'roomsNumber' =>$request->roomsNumber,
                'bathroomsNumber' =>$request->bathroomsNumber,   
                'appartmentNumber' =>$request->appartmentNumber,
                'roomsCount' =>$request->roomsCount,

                'region' =>$request->region,
                'surface' =>$request->surface,
                'price' =>$request->price, 
                'description' =>$request->description,
                //'image_principale' =>$input['imagename0'],
                'description_english' => $request->descriptionEnglish,
                'owner_name' => $request->owner_name,
                'owner_number' => $request->owner_number,
                'owner_phone' =>$request->owner_phone,
                'owner_nationality' => $request->owner_nationality,
                'owner_adresse' => $request->owner_adresse,
                'owner_bank_acount' => $request->owner_bank_acount, 
                'owner_bank_acount_name' => $request->owner_bank_acount_name,


                'etat' => "attente",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),


            ]

        );
        $estateId = DB::getPdo()->lastInsertId();

        if($request->hasFile('image1')){
            $image1 = $request->file('image1');
            $input['imagename'] = time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image1->move($destinationPath,  $input['imagename']);
            
            $image = new Image;
            $image->id_estate = $estateId;
            $image->image = $input['imagename'];
            $image->save();

          };
          $lastId = DB::getPdo()->lastInsertId();
          if($request->hasFile('image2')){
            $image2 = $request->file('image2');
            $imageName2 = $lastId. time().'.'.$image2->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image2->move($destinationPath,  $imageName2);
            
            $image = new Image;
            $image->id_estate = $estateId;
            $image->image = $imageName2;
            $image->save();
          }
          $lastId2 = DB::getPdo()->lastInsertId();
          if($request->hasFile('image3')){
            $image3 = $request->file('image3');
            $imageName3 = $lastId2. time().'.'.$image3->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image3->move($destinationPath,  $imageName3);
            
            $image = new Image;
            $image->id_estate = $estateId;
            $image->image = $imageName3;
            $image->save();
          }
          DB::table('estates')
            ->where('id_estate', $estateId)
            ->update(['image_principale' =>  $input['imagename']]);
            if(Session::has('admin'))
            {
                return redirect('admin')->with('message', 'تم إضافة العقار بنجاح');

            }else{
                return redirect('employe-admin')->with('message', 'تم إضافة العقار بنجاح');

            }
    }

    public function addRevenue(Request $request)
    {
        DB::table('expences')->insert(
            [   'id_estate' =>  $request->stateId,
                'libelle' =>  $request->typeDepences,
                'prix' =>$request->priceDepences,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),

            ]

        );
    }

    public function buyEstate($id)
    {
        $estate = DB::table('estates')->where('id_estate', $id)->first();
        return view('back.employes.buyEstates.buy', compact('estate'));
    }

    public function confirmBuyEstate (Request $request)
    {
         
        DB::table('purchasers')->insert(
            [   'name_purchaser' => $request->name_purchaser,
                'number_purchaser' => $request->number_purchaser,
                'nationality_purchaser' => $request->nationality_purchaser,
                'phone_purchaser' => $request->phone_purchaser,

            ]

        );
        $purchaserId = DB::getPdo()->lastInsertId();
        if($request->state_for === 'buy')
        {
            $buyEstate = DB::table('reports')->insert(
                [   'id_estate' =>  $request->id_estate,
                    'id_purchaser' =>  $purchaserId,
                    'remaining_amount' =>$request->remaining_amount,
                    'submitted_amount' =>$request->submitted_amount,
                    'document_number' =>$request->document_number,
                    'submitted_number' =>$request->submitted_number,
    
                    'location' =>$request->location,
                    'building' =>$request->building,
                    'path' =>$request->path,
                    'complex' =>$request->complex,
                    'type' => 'buy',
                    'created_at' => date("Y-m-d H:i:s"),
                    
    
                ]
    
            );
        }else{
            $buyEstate = DB::table('reports')->insert(
                [   'id_estate' =>  $request->id_estate,
                    'id_purchaser' =>  $purchaserId,
                    'remaining_amount' =>$request->remaining_amount,
                    'submitted_amount' =>$request->submitted_amount,
                    'location' =>$request->location,
                    'building' =>$request->building,
                    'path' =>$request->path,
                    'complex' =>$request->complex,
                    'type' => 'rent',
                    'created_at' => date("Y-m-d H:i:s"),
                    'nbr_jours_rent' =>$request->nbr_jours_rent,
                    
                    'start_rent' =>$request->start_rent,
                    'end_rent' =>$request->end_rent,
                    	
                    
    
                ]
    
            );

        }
        
        if($buyEstate){
            if($request->state_for === 'buy')
            {
                DB::table('estates')
                ->where('id_estate', $request->id_estate)
                ->update(['status' =>   "buyed"]);
                return redirect('reports')->with('message', 'تمت العملية  بنجاح  bay3');
            }else{
                DB::table('estates')
                ->where('id_estate', $request->id_estate)
                ->update(['status' =>   "rented"]);
                return redirect('reports')->with('message', 'تمت العملية  بنجاح  ijar');
            }
        }else{
            return redirect('reports')->with('error', 'خطأ أتناء العملية أعد العملية ');

        }
      
    }

    public function rentEstate($id)
    {
        $estate = DB::table('estates')->where('id_estate', $id)->first();
        return view('back.employes.buyEstates.rent', compact('estate'));
    }

    public function estatesBuyed(Request $reques)
    {
        $estates = DB::table('estates')->where('rentorBuy', "buy")->get();
        return response ()->json ($estates);
    }

    public function estatesRented(Request $reques)
    {
        $estates = DB::table('estates')->where('rentorBuy', "rent")->get();
        return response ()->json ($estates);
    }

    public function estatesFlats(Request $reques)
    {
        $estates = DB::table('estates')->where('type', $reques->type)->get();
        return response ()->json ($estates);
    }

  
}
