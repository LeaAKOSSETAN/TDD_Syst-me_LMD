<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Unités d’Enseignement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
</head>
<body class="bg-gray-50">
<header>
        <div class="logo">
            📄 <span>Liste des Unités d’Enseignement</span>
        </div>
        <nav>
            <a href="/home">Home</a>
            <a href="/notes">Notes</a>
            <a href="/create">Create</a>
        </nav>
</header>


    <!-- Container for the page -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">

        <!-- Header section -->
        <header class="text-center mb-6">
            <h1 class="text-3xl font-semibold text-gray-800 mb-2">Liste des Unités d’Enseignement</h1>
            <p class="text-gray-600">Découvrez toutes les unités d'enseignement de votre programme et gérez-les facilement.</p>
        </header>

        <!-- Table section -->
        <div class="table-container bg-white">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Code UE</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Nom</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">ECTS</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Semestre</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ues as $ue)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $ue['code'] }}</td>
                            <td class="px-4 py-2">{{ $ue['nom'] }}</td>
                            <td class="px-4 py-2">{{ $ue['credits_ects'] }}</td>
                            <td class="px-4 py-2">S{{ $ue['semestre'] }}</td>
                            <td class="px-4 py-2">
                                <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Modifier</button>
                                <button class="ml-2 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
<style>
    /* Custom styles for hover effects */
table tr:hover {
    background-color: #f3f4f6;
}

button:hover {
    transform: scale(1.05);
    transition: transform 0.2s ease-in-out;
}

/* Highlight the "Delete" button */
button.bg-red-500:hover {
    background-color: #9b1c1c;
}

/* Table Styling */
.table-container {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 1rem;
}

th {
    background-color: #f3f4f6;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

td {
    border-bottom: 1px solid #e5e7eb;
}



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
