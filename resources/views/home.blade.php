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
    <header>
        <div class="logo">
            📄 <span>Liste des Unités d’Enseignement</span>
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="notes/create">Notes</a>
            <a href="ues">Ues</a>
        </nav>
</header>
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
            <a href="{{ route('ues.index') }}" class="btn">Gérer</a>
        </div>
    </div>
</body>
</html>
<style>
    
header {
    background-color: #4C51BF; /* Bleu profond */
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 70px;
}

header .logo {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.5rem;
    font-weight: bold;
}

header nav a {
    text-align: center;
    color: white;
    text-decoration: none;
    font-size: 1rem;
    margin-left: 100px;
    transition: color 0.3s ease;


}

header nav a:hover {
    color: #A0AEC0; /* Gris clair au survol */
}

</style>