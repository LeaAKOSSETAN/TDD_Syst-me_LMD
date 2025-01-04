@extends('layouts.app')

@section('content')
    <h1>Liste des UEs</h1>
    <table>
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>ECTS</th>
                <th>Semestre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ues as $ue)
                <tr>
                    <td>{{ $ue->code }}</td>
                    <td>{{ $ue->nom }}</td>
                    <td>{{ $ue->credits_ects }}</td>
                    <td>S{{ $ue->semestre }}</td>
                    <td>
                        <a href="{{ route('ues.edit', $ue->id) }}">Modifier</a>
                        <form action="{{ route('ues.destroy', $ue->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
