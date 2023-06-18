<?php

namespace App\Http\Controllers;

use App\Models\affectation;
use App\Models\departement;
use App\Models\User;
use App\Models\materiel;
use App\Models\types;
use Illuminate\Http\Request;

class Modification extends Controller
{
    public function getMaterielById($ser)
    {
       
        try {
            $materiel = Materiel::where('ser', $ser)->first(); 
            if (!$materiel) {
                return response()->json(['message' => 'Material not found'], 404);
            }
    
            return response()->json($materiel, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Internal server error'], 500);
        }
       
    }
   
    public function getUSERById($id_user)
    {
       
        try {
            $user = User::where('id_user', $id_user)->first(); 
            if (!$user) {
                return response()->json(['message' => 'user not found'], 404);
            }
    
            return response()->json($user, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Internal server error'], 500);
        }
       
    }

    public function getdepartementByname($name)
    {
       
        try {
            $departement = departement::where('name', $name)->first(); 
            if (!$departement) {
                return response()->json(['message' => 'departement not found'], 404);
            }
    
            return response()->json($departement, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Internal server error'], 500);
        }
       
    }

    public function getTypeByname($name)
    {
       
        try {
            $types = types::where('name', $name)->first(); 
            if (!$types) {
                return response()->json(['message' => 'types not found'], 404);
            }
    
            return response()->json($types, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Internal server error'], 500);
        }
       
    }
    public function getAffectatinByid($id_affectation)
    {
       
        try {
            $affectation = affectation::where('id_affectation', $id_affectation)->first(); 
            if (!$affectation) {
                return response()->json(['message' => 'types not found'], 404);
            }
    
            return response()->json($affectation, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Internal server error'], 500);
        }
       
    }


}
