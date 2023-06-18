<?php

namespace App\Http\Controllers;

use App\Models\affectation;
use App\Models\departement;
use App\Models\materiel;
use App\Models\types;
use App\Models\User;
use Illuminate\Http\Request;


class Update extends Controller
{
    public function updateMateriel(Request $request, $ser)
    {
        $materiel = Materiel::where('ser', $ser)->update([
            'mark' => $request->input('mark'),
            'model' => $request->input('model'),
            'type' => $request->input('type'),
            'code_2m' => $request->input('code_2m'),
            'ser' => $request->input('ser'),
            // Update other attributes as needed
        ]);
    
        if (!$materiel) {
            return response()->json(['message' => 'Material not found'], 404);
        }
    
        return response()->json(['message' => 'Material updated successfully'], 200);}


        public function updateUser(Request $request, $id_user)
    {
        $user = User::where('id_user', $id_user)->update([
            'name' => $request->input('name'),
            'departement' => $request->input('departement'),
         
            // Update other attributes as needed
        ]);
    
        if (!$user) {
            return response()->json(['message' => 'user not found'], 404);
        }
    
        return response()->json(['message' => 'user updated successfully'], 200);
    }

    public function updateDepartement(Request $request, $name)
    {
        $departement = departement::where('name', $name)->update([
            'name' => $request->input('name'),
        ]);
    
        if (!$departement) {
            return response()->json(['message' => 'departement not found'], 404);
        }
    
        return response()->json(['message' => 'departement updated successfully'], 200);
    }

    public function updateTypes(Request $request, $name)
    {
        $types = types::where('name', $name)->update([
            'name' => $request->input('name'),
        ]);
    
        if (!$types) {
            return response()->json(['message' => 'types not found'], 404);
        }
    
        return response()->json(['message' => 'types updated successfully'], 200);
    }

    public function updateAffectation(Request $request, $id_affectation)
    {
        $affectation = affectation::where('id_affectation', $id_affectation)->update([
            
            'localisation' =>  $request->input('localisation'),
            'date' =>  $request->input('date'),
            'batiment' =>  $request->input('batiment'),
             'departement' => $request->input('departement'),
             'etage' => $request->input('etage'),
            'user' =>  $request->input('user'),
            'materiel' =>$request->input('materiel'),
            
            // Update other attributes as needed
        ]);
    
        if (!$affectation) {
            return response()->json(['message' => 'Material not found'], 404);
        }
    
        return response()->json(['message' => 'Material updated successfully'], 200);
    }
}
