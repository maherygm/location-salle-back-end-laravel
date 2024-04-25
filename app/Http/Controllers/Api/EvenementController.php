<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEvenementRequest;
use App\Http\Requests\EditEvenementRequest;
use App\Models\Evenement;
use Exception;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    //

    public function getAll()
    {

        try {
            $evenement =  Evenement::all();
            return response()->json(
                [
                    'status_code' => 200,
                    'status_message' => 'toutes les postes',
                    'data' => $evenement
                ]
            );
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }
    public function add(CreateEvenementRequest $request)
    {

        try {
            $evenement = new Evenement();
            $evenement->types = $request->types;
            $evenement->description = $request->description;
            $evenement->date = $request->date;
            $evenement->save();


            return response()->json(
                [
                    'status_code' => 200,
                    'status_message' => 'le post a éte ajouté',
                    'data' => $evenement
                ]
            );
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }
    public function edit(EditEvenementRequest  $request, Evenement $evenement)
    {
        try {
            $evenement->types = $request->types;
            $evenement->description = $request->description;
            $evenement->date = $request->date;
            $evenement->save();
            return response()->json(
                [
                    'status_code' => 200,
                    'status_message' => 'le post a éte modifié',
                    'data' => $evenement
                ]
            );
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }
    public function getOne(Request $request, Evenement $evenement)
    {
        try {
            return response()->json(
                [
                    'status_code' => 200,
                    'status_message' => 'le post a éte recuperé',
                    'data' => $evenement
                ]
            );
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }
    public function delete(Request $request, Evenement $evenement)
    {
        try {
            $evenement->delete();

            return response()->json(
                [
                    'status_code' => 200,
                    'status_message' => 'le post a éte supprimé',
                    'data' => $evenement
                ]
            );
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }
}
