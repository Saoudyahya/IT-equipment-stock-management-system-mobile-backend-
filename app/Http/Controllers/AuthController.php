<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\admin;
use App\Models\affectation;
use App\Models\types;
use App\Models\materiel;
use App\Models\departement;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registerA(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 400);
        }

        $admin = new admin();

       
    
        $admin->username = $request->input('username');
        $admin->password = $request->input('password');
       
   
     
            if($admin->save()){
                return response()->json([
                    'success' => true,
                    'message' => 'Registration successful',
                    'username' => $admin->username,
                    'password' => $admin->password,
                ], 200);
            }else{

                return response()->json([
                    'success' => true,
                    'message' => 'Registration not successful',
                    'username' => $admin->username,
                    'password' => $admin->password,
                ], 200);
            }
         
            
           
         
        
       
    }


    public function registerM(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ser' => 'required',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 400);
        }

        $materiel = new materiel();

       
    
        $materiel->ser = $request->input('ser');
        $materiel->type = $request->input('type');
        $materiel->mark = $request->input('mark');
        $materiel->model = $request->input('model');
        $materiel->code_2m = $request->input('code_2m');
       
   
     
            if($materiel->save()){
                return response()->json([
                    'success' => true,
                    'message' => 'Registration successful',
                    'ser' =>$materiel->ser, 
                    'type' =>$materiel->type, 
                    'mark' =>$materiel->mark ,
                    'code_2m' =>$materiel->code_2m, 
                ], 200);
            }else{

                return response()->json([
                    'success' => true,
                    'message' => 'Registration not successful',
                    'ser' =>$materiel->ser, 
                    'type' =>$materiel->type, 
                    'mark' =>$materiel->mark ,
                    'code_2m' =>$materiel->code_2m, 
                ], 200);
            }
         
            
           
         
        
       
    }

    public function registerU(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'departement' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 400);
        }

        $user = new User();

       
    
        $user->name = $request->input('name');
        $user->departement = $request->input('departement');
       
       
   
     
            if($user->save()){
                return response()->json([
                    'success' => true,
                    'message' => 'Registration successful',
                    'name' => $user->name, 
                    'departement' =>$user->departement, 
                 
                ], 200);
            }else{

                return response()->json([
                    'success' => true,
                    'message' => 'Registration not successful',
                    'name' => $user->name, 
                    'departement' =>$user->departement, 
                ], 200);
            }
         
            
           
         
        
       
    }

    public function registerD(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 400);
        }

        $departement = new departement();

       
    
        $departement->name = $request->input('name');
       
       
       
   
     
            if($departement->save()){
                return response()->json([
                    'success' => true,
                    'message' => 'Registration successful',
                    'name' => $departement->name, 
                    
                 
                ], 200);
            }else{

                return response()->json([
                    'success' => true,
                    'message' => 'Registration not successful',
                    'name' => $departement->name, 
                    
                ], 200);
            }
         
            
         
        
       
    }

    public function registerT(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 400);
        }

        $types = new types();

       
    
        $types->name = $request->input('type');
       
       
       
   
     
            if($types->save()){
                return response()->json([
                    'success' => true,
                    'message' => 'Registration successful',
                    'name' => $types->name, 
                    
                 
                ], 200);
            }else{

                return response()->json([
                    'success' => true,
                    'message' => 'Registration not successful',
                    'name' => $types->name, 
                    
                ], 200);
            }
         
            
         
        
       
    } 
      public function registerAF(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user' => 'required',
            'departement' => 'required',
            'materiel' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 400);
        }

        $affectation = new affectation();

       
    
        $affectation->localisation = $request->input('localisation');
        $affectation->date = $request->input('date');
        $affectation->batiment = $request->input('batiment');
        $affectation->departement	 = $request->input('departement');
        $affectation->etage = $request->input('etage');
        $affectation->user = $request->input('user');
        $affectation->materiel = $request->input('materiel');
       
   
     
            if($affectation->save()){
                return response()->json([
                    'success' => true,
                    'message' => 'Registration successful',
                    'localisation' =>$affectation->localisation, 
                    'date' =>$affectation->date, 
                    'batiment' =>$affectation->batiment ,
                    'departement' =>$affectation->departement, 
                    'etage' =>$affectation->etage, 
                    'user' =>$affectation->user, 
                    'materiel' =>$affectation->materiel, 
                ], 200);
            }else{

                return response()->json([
                    'success' => true,
                    'message' => 'Registration not successful',
                    'localisation' =>$affectation->localisation, 
                    'date' =>$affectation->date, 
                    'batiment' =>$affectation->batiment ,
                    'departement' =>$affectation->departement, 
                    'etage' =>$affectation->etage, 
                    'user' =>$affectation->user, 
                    'materiel' =>$affectation->materiel, 
                ], 200);
            }
         
            
           
         
        
       
    }
    public function signIn(Request $request)
    {
       $username=$request->input('username');
        $password=$request->input('password');
            $admin = admin::where('username', $username)->where('password', $password)->where('type', '!=', 'user')->first(); 
            if ($admin!=null) {
                return response()->json(['message' => $admin,'success'=> true], 200);
            }
            return response()->json(['message' => $admin,'success'=> false], 401);
           
        
       
    }
}