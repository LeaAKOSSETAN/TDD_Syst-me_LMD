@extends('layouts.app')

@section('title', 'Liste des UEs')

@section('content')
    <h1>Liste des Unités d’Enseignement</h1>
    <table>
        <thead>
            <tr>
                <th>Code UE</th>
                <th>Nom</th>
                <th>ECTS</th>
                <th>Semestre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $ues = [
                    ['code' => 'UE11', 'nom' => 'Programmation Web', 'credits_ects' => 6, 'semestre' => 1],
                    ['code' => 'UE12', 'nom' => 'Algorithmes', 'credits_ects' => 4, 'semestre' => 1],
                ];
            @endphp

            @foreach($ues as $ue)
                <tr>
                    <td>{{ $ue['code'] }}</td>
                    <td>{{ $ue['nom'] }}</td>
                    <td>{{ $ue['credits_ects'] }}</td>
                    <td>S{{ $ue['semestre'] }}</td>
                    <td>
                        <button>Modifier</button>
                        <button>Supprimer</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
