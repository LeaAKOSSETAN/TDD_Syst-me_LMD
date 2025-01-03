

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    @extends('layouts.app')

@section('title', 'Saisie des Notes')

@section('content')
    <h1>Saisie des Notes</h1>
    <form action="#" method="POST">
        <!-- Simuler les options pour le formulaire -->
        @php
            $ecs = [
                ['id' => 1, 'code' => 'EC11', 'nom' => 'Programmation PHP'],
                ['id' => 2, 'code' => 'EC12', 'nom' => 'Bases de Données'],
            ];
        @endphp

        <label for="ec_id">Choisir une EC :</label>
        <select name="ec_id" id="ec_id">
            @foreach($ecs as $ec)
                <option value="{{ $ec['id'] }}">{{ $ec['code'] }} - {{ $ec['nom'] }}</option>
            @endforeach
        </select>

        <label for="note">Note :</label>
        <input type="number" name="note" id="note" min="0" max="20" step="0.25" required>

        <label for="session">Session :</label>
        <select name="session" id="session">
            <option value="normale">Session Normale</option>
            <option value="rattrapage">Session de Rattrapage</option>
        </select>

        <button type="submit">Enregistrer</button>
    </form>
@endsection

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
