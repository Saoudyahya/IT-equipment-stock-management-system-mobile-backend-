<?php

use App\Http\Controllers\Affichage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\delete;
use App\Http\Controllers\Delete as ControllersDelete;
use App\Http\Controllers\Modification;
use App\Http\Controllers\Statistic;
use App\Http\Controllers\Update;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[AuthController::class, 'registerA']);
Route::post('/registerMATERIEL',[AuthController::class, 'registerM']);
Route::post('/registerUSER',[AuthController::class, 'registerU']);
Route::post('/registerDEPARTEMENT',[AuthController::class, 'registerD']);
Route::post('/registerTYPES',[AuthController::class, 'registerT']);
Route::post('/registerAFFECTATION',[AuthController::class, 'registerAF']);
//--------------------------------------------------------------------------
Route::post('/affichageMATERIEL',[Affichage::class, 'affichageM']);
Route::post('/affichageUSER',[Affichage::class, 'affichageU']);
Route::post('/affichageDEPARTEMENT',[Affichage::class, 'affichageD']);
Route::post('/affichageTYPES',[Affichage::class, 'affichageT']);
Route::post('/affichageAFFECTATION',[Affichage::class, 'affichageA']);
//---------------------------------------------------------------------------------
Route::post('/ModificationMATERIEL/{ser}',[Modification::class, 'getMaterielById']);
Route::post('/ModificationUSER/{id_user}',[Modification::class, 'getUSERById']);
Route::post('/ModificationDEPARTEMENT/{name}',[Modification::class, 'getdepartementByname']);
Route::post('/ModificationTYPES/{name}',[Modification::class, 'getTypeByname']);
Route::post('/ModificationAFFECTATION/{id}',[Modification::class, 'getAffectatinByid']);
//-----------------------------------------------------------------------------------------
Route::post('/UpdateMATERIEL/{ser}',[Update::class, 'updateMateriel']);
Route::post('/UpdateUSER/{id_user}',[Update::class, 'updateUser']);
Route::post('/UpdateDEPARTEMENT/{name}',[Update::class, 'updateDepartement']);
Route::post('/UpdateTYPES/{name}',[Update::class, 'updateTypes']);
Route::post('/UpdateAFFECTATION/{id}',[Update::class, 'updateAffectation']);
//--------------------------------------------------------------------------
Route::post('/DeleteMATERIEL/{ser}',[ControllersDelete::class, 'deleteMateriel']);
Route::post('/DeleteUSER/{id_user}',[ControllersDelete::class, 'deleteUser']);
Route::post('/DeleteDEPARTEMENT/{name}',[ControllersDelete::class, 'deleteDepartement']);
Route::post('/DeleteTYPES/{name}',[ControllersDelete::class, 'deleteType']);
Route::post('/DeleteAFFECTATION/{id}',[ControllersDelete::class, 'deleteAffectation']);
//-------------------------------------------------------------------
Route::post('/affichageMATERIEL-ser/{ser}',[Affichage::class, 'affichageMateriel_ser']);
Route::post('/affichageMATERIEL-model/{model}',[Affichage::class, 'affichageMateriel_model']);
Route::post('/affichageMATERIEL-mark/{mark}',[Affichage::class, 'affichageMateriel_mark']);
Route::post('/affichageMATERIEL-code_2m/{code_2m}',[Affichage::class, 'affichageMateriel_code_2m']);
Route::post('/affichageMATERIEL-type/{type}',[Affichage::class, 'affichageMateriel_type']);
Route::post('/affichageUser-name/{name}',[Affichage::class, 'affichageUser_name']);
Route::post('/affichageUSER-departement/{departement}',[Affichage::class, 'affichageUser_departement']);
Route::post('/affichageDEPARTEMENT-name/{name}',[Affichage::class, 'affichageDepartement_name']);
Route::post('/affichageTYPES-name/{name}',[Affichage::class, 'affichageType_name']);
Route::post('/affichageAFFECTATION-localisation/{localisation}',[Affichage::class, 'affichageAffectation_localisation']);
Route::post('/affichageAFFECTATION-etage/{etage}',[Affichage::class, 'affichageAffectation_etage']);
Route::post('/affichageAFFECTATION-batiment/{batiment}',[Affichage::class, 'affichageAffectation_batiment']);
Route::post('/affichageAFFECTATION-date/{date}',[Affichage::class, 'affichageAffectation_date']);
Route::post('/affichageAFFECTATION-user/{user}',[Affichage::class, 'affichageAffectation_user']);
Route::post('/affichageAFFECTATION-materiel/{materiel}',[Affichage::class, 'affichageAffectation_materiel']);
Route::post('/affichageAFFECTATION-departement/{departement}',[Affichage::class, 'affichageAffectation_departement']);
//--------------------------------------------------------------------
Route::post('/statisticMATERIEL',[Statistic::class, 'countMaterials']);
Route::post('/statisticMATERIEL-inaffectation',[Statistic::class, 'countNotInAffectation']);
Route::post('/statisticMATERIEL-types',[Statistic::class, 'getType']);
Route::post('/statisticUser',[Statistic::class, 'countUsers']);
Route::post('/statisticUser-inaffectation',[Statistic::class, 'countUsernotinAffectation']);
Route::post('/statisticUser-departement',[Statistic::class, 'getUserdepartement']);
Route::post('/statisticDepartement',[Statistic::class, 'countDepartement']);
Route::post('/statisticDepartement-inaffectation',[Statistic::class, 'countUsernotinAffectation']);
Route::post('/statisticTYPES',[Statistic::class, 'countTypes']);
Route::post('/statisticTYPES-inmateriel',[Statistic::class, 'countTypesnotinmateriel']);
Route::post('/statisticAFFECTATION',[Statistic::class, 'countAffectation']);
Route::post('/statisticAFFECTATION-localisation',[Statistic::class, 'getlocationAffecation']);
Route::post('/statisticAFFECTATION-batiment',[Statistic::class, 'getbatimentAffecation']);
Route::post('/statisticAFFECTATION-date',[Statistic::class, 'getbatimentdate']);
//--------------------------------------------------------------------
Route::post('/signIn',[AuthController::class, 'signIn']);