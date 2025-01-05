<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('UES') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
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
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
