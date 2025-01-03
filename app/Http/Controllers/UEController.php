<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UEController extends Controller
{
    public function index()
    {
        // Récupérez des données si nécessaire
        $ues = UE::all();

        // Retournez la vue avec les données
        return view('ues', compact('ues'));
    }
}
