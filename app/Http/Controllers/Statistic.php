<?php

namespace App\Http\Controllers;

use App\Models\materiel;
use App\Models\affectation;
use App\Models\departement;
use App\Models\types;
use App\Models\User;
use Illuminate\Http\Request;

class Statistic extends Controller
{
    public function countMaterials()
    {
        $materiel = Materiel::count();
        return response()->json([$materiel]);
    }

    public function countNotInAffectation()
    {
    $count =Materiel::whereNotIn('ser', function ($query) {
        $query->select('materiel')->from('affectation');
    })->count('ser');
    return response()->json([$count]);
    }

    public function getType()
    {
    $types = Materiel::select('Type')->get();

    return response()->json($types);
    }

    public function countUsers()
    {
        $User = User::count();
        return response()->json($User);
    }
    public function countUsernotinAffectation()
    {
    $count =User::whereNotIn('name', function ($query) {
        $query->select('user')->from('affectation');
    })->count('name');
    return response()->json($count);
    }
    public function getUserdepartement()
    {
    $User = User::select('departement')->get();

    return response()->json($User);
    }
    public function countDepartement()
    {
        $departement = departement::count();
        return response()->json([$departement]);
    }

    public function countDepartementnotinAffectation()
    {
    $count =departement::whereNotIn('name', function ($query) {
        $query->select('departement')->from('affectation');
    })->count('name');
    return response()->json($count);
    }
    public function countTypes()
    {
        $types = types::count();
        return response()->json($types);
    }
    public function countTypesnotinmateriel()
    {
        $count = types::whereNotIn('name', function ($query) {
            $query->select('type')->from('materiel');
        })->count('name');
        
        return  response()->json($count);
    }
    public function countAffectation()
    {
        $affectation = affectation::count();
        return response()->json($affectation);
    }
    public function getlocationAffecation()
    {
    $affectation = affectation::select('localisation')->get();

    return response()->json($affectation);
    }
    public function getbatimentAffecation()
    {
    $affectation = affectation::select('batiment')->get();

    return response()->json($affectation);
    }
    public function getbatimentdate()
    {
    $affectation = affectation::select('date')->get();

    return response()->json($affectation);
    }
}
