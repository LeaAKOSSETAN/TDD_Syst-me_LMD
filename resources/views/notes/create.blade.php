<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une Note</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Inclure vos styles CSS -->
</head>
<body>
    <div class="container mt-5">
        <h1>Ajouter une Note</h1>

        <!-- Affichage des erreurs de validation -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire -->
        <form action="{{ route('notes.store') }}" method="POST">
            @csrf <!-- Protection CSRF -->
            
            <!-- Étudiant -->
            <div class="mb-3">
                <label for="etudiant_id" class="form-label">Étudiant</label>
                <select name="etudiant_id" id="etudiant_id" class="form-select" required>
                    <option value="">Sélectionner un étudiant</option>
                    @foreach ($etudiants as $etudiant)
                        <option value="{{ $etudiant->id }}">{{ $etudiant->nom }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Élément Constitutif (EC) -->
            <div class="mb-3">
                <label for="element_constitutif_id" class="form-label">Élément Constitutif (EC)</label>
                <select name="element_constitutif_id" id="element_constitutif_id" class="form-select" required>
                    <option value="">Sélectionner un EC</option>
                    @foreach ($elementsConstitutifs as $ec)
                        <option value="{{ $ec->id }}">{{ $ec->nom }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Note -->
            <div class="mb-3">
                <label for="valeur" class="form-label">Note</label>
                <input type="number" step="0.01" min="0" max="20" name="valeur" id="valeur" class="form-control" placeholder="Entrer la note" required>
            </div>

            <!-- Session -->
            <div class="mb-3">
                <label for="session" class="form-label">Session</label>
                <select name="session" id="session" class="form-select" required>
                    <option value="1">Session 1</option>
                    <option value="2">Session 2</option>
                </select>
            </div>

            <!-- Date -->
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>

            <!-- Bouton soumettre -->
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('notes.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</body>
</html>
