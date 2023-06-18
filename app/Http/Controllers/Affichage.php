<?php

namespace App\Http\Controllers;

use App\Models\affectation;
use App\Models\User;
use App\Models\types;
use App\Models\materiel;
use App\Models\departement;
use Illuminate\Http\Request;

class Affichage extends Controller
{
    public function affichageM()
    {
        $materiel = materiel::all();

        return response()->json($materiel);
    }//
    public function affichageu()
    {
        $USER = User::all();

        return response()->json($USER);
    }//
    public function affichageD()
    {
        $departement = departement::all();

        return response()->json($departement);
    }
    public function affichageT()
    {
        $types = types::all();

        return response()->json($types);
    }
    public function affichageA()
    {
        $affectation = affectation::all();

        return response()->json($affectation);
    }
    public function affichageUser_departement($departement)
    {
        $User = User::where('departement', $departement)->get();

        return response()->json($User);
    }
    public function affichageMateriel_ser($ser)
    {
        $materiel = materiel::where('ser', $ser)->get();

        return response()->json($materiel);
    }
    public function affichageMateriel_model($model)
    {
        $materiel = materiel::where('model', $model)->get();

        return response()->json($materiel);
    }
    public function affichageMateriel_mark($mark)
    {
        $materiel = materiel::where('mark', $mark)->get();

        return response()->json($materiel);
    }
    public function affichageMateriel_code_2m($code_2m)
    {
        $materiel = materiel::where('code_2m', $code_2m)->get();

        return response()->json($materiel);
    }
    public function affichageMateriel_type($type)
    {
        $materiel = materiel::where('type', $type)->get();

        return response()->json($materiel);
    }
    public function affichageUser_name($name)
    {
        $User = User::where('name', $name)->get();

        return response()->json($User);
    }
    public function affichageDepartement_name($name)
    {
        $departement = departement::where('name', $name)->get();

        return response()->json($departement);
    }
    public function affichageType_name($name)
    {
        $types = types::where('name', $name)->get();

        return response()->json($types);
    }
    public function affichageAffectation_localisation($localisation)
    {
        $affectation = affectation::where('localisation', $localisation)->get();

        return response()->json($affectation);
    }
    public function affichageAffectation_etage($etage)
    {
        $affectation = affectation::where('etage', $etage)->get();

        return response()->json($affectation);
    }
    public function affichageAffectation_batiment($batiment)
    {
        $affectation = affectation::where('batiment', $batiment)->get();

        return response()->json($affectation);
    }
    public function affichageAffectation_date($date)
    {
        $affectation = affectation::where('date', $date)->get();

        return response()->json($affectation);
    }
    public function affichageAffectation_user($user)
    {
        $affectation = affectation::where('user', $user)->get();

        return response()->json($affectation);
    }
    public function affichageAffectation_materiel($materiel)
    {
        $affectation = affectation::where('materiel', $materiel)->get();

        return response()->json($affectation);
    }
    public function affichageAffectation_departement($departement)
    {
        $affectation = affectation::where('departement', $departement)->get();

        return response()->json($affectation);
    }
}
