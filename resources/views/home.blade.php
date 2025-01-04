@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    @vite('resources/css/app.css') <!-- Inclure Tailwind ou CSS personnalisé -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="title">Bienvenue dans le système de gestion LMD</h1>

        <div class="card">
            <h2 class="card-title">Gérer les Notes</h2>
            <p class="card-description">
                Accédez à la page de gestion des notes pour créer, modifier ou consulter les notes des étudiants.
            </p>
            <a href="{{ route('notes.create') }}" class="btn">Éditer</a>
        </div>

        <div class="card">
            <h2 class="card-title">Gérer les UEs</h2>
            <p class="card-description">
                Consultez et modifiez la liste des unités d'enseignement (UEs) disponibles dans le système.
            </p>
            <a href="{{ route('ues.index') }}" class="btn">Éditer</a>
        </div>
    </div>
</body>
</html>
