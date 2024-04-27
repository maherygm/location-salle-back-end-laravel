<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\EditAdminRequest;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAll()
    {
        try {
            $admins =  Admin::all();
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Tous les administrateurs récupérés',
                'data' => $admins
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }

    public function add(CreateAdminRequest $request)
    {
        try {
            $admin = Admin::create($request->validated());
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Administrateur ajouté avec succès',
                'data' => $admin
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }

    public function edit(EditAdminRequest $request, Admin $admin)
    {
        try {
            $admin->update($request->validated());
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Administrateur modifié avec succès',
                'data' => $admin
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }

    public function getOne(Request $request, Admin $admin)
    {
        try {
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Administrateur récupéré avec succès',
                'data' => $admin
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }

    public function delete(Request $request, Admin $admin)
    {
        try {
            $admin->delete();
            return response()->json([
                'status_code' => 200,
                'status_message' => 'Administrateur supprimé avec succès',
                'data' => $admin
            ]);
        } catch (Exception $erreur) {
            return response()->json($erreur->getMessage(), 500);
        }
    }
}

