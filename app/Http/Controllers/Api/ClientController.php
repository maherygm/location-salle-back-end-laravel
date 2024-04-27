<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\EditClientRequest;
use App\Models\Client;
use Exception;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getAll()
    {
        try {
            $clients =  Client::all();
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Tous les clients récupérés',
                'data' => $clients
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }

    public function add(CreateClientRequest $request)
    {
        try {
            $client = Client::create($request->validated());
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Client ajouté avec succès',
                'data' => $client
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }

    public function edit(EditClientRequest $request, Client $client)
    {
        try {
            $client->update($request->validated());
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Client modifié avec succès',
                'data' => $client
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }

    public function getOne(Request $request, Client $client)
    {
        try {
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Client récupéré avec succès',
                'data' => $client
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }

    public function delete(Request $request, Client $client)
    {
        try {
            $client->delete();
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Client supprimé avec succès',
                'data' => $client
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }
}


