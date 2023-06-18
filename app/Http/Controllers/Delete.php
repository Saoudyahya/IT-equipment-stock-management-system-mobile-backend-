<?php

namespace App\Http\Controllers;

use App\Models\affectation;
use App\Models\departement;
use App\Models\materiel;
use App\Models\types;
use App\Models\User;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function deleteMateriel($ser)
    {
       
        $materiel = Materiel::where('ser', $ser)->delete();

        if (!$materiel) {
            return response()->json(['message' => 'Failed to delete material'], 500);
        }
        
        return response()->json(['message' => 'Material has been deleted'], 200);
    }
        public function deleteUser($id_user)
        {
           
            $User = User::where('id_user', $id_user)->delete();
    
            if (!$User) {
                return response()->json(['message' => 'Failed to delete User'], 500);
            }
            
            return response()->json(['message' => 'User has been deleted'], 200);
        }

        public function deleteDepartement($name)
        {
           
            $departement = departement::where('name', $name)->delete();
    
            if (!$departement) {
                return response()->json(['message' => 'Failed to delete departement'], 500);
            }
            
            return response()->json(['message' => 'departement has been deleted'], 200);
        }
        public function deleteType($name)
        {
           
            $types = types::where('name', $name)->delete();
    
            if (!$types) {
                return response()->json(['message' => 'Failed to delete type'], 500);
            }
            
            return response()->json(['message' => 'type has been deleted'], 200);
        }
        public function deleteAffectation($id_affectation)
        {
           
            $affectation = affectation::where('id_affectation', $id_affectation)->delete();
    
            if (!$affectation) {
                return response()->json(['message' => 'Failed to delete affectation'], 500);
            }
            
            return response()->json(['message' => 'affectation has been deleted'], 200);
        }

}
