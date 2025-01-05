<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UE;


class UEController extends Controller
{
    public function index()
    {
        // Récupérez des données si nécessaire
        $ues = UE::all();

        // Retournez la vue avec les données
        return view('ues.ues', compact('ues'));
    }
}
