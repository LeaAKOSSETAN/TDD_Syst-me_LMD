<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisie des Notes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            📄 <span>Saisie Notes</span>
        </div>
        <nav>
            <a href="/home">Home</a>
            <a href="/notes">Notes</a>
            <a href="/create">Create</a>
        </nav>
    </header>

    <!-- Form Section -->
    <div class="container">
        <h1>Saisie des Notes</h1>
        <form action="#" method="POST">
            <!-- Ligne 1: Nom et Prénom -->
            <div class="form-row">
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required>
                </div>
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" required>
                </div>
            </div>
            <!-- Ligne 2: Année d'étude et Filière -->
            <div class="form-row">
                <div>
                    <label for="annee_etude">Année d'étude :</label>
                    <select name="annee_etude" id="annee_etude">
                        <option value="" disabled selected>Choisissez une année</option>
                        <option value="L1">Licence 1 (L1)</option>
                        <option value="L2">Licence 2 (L2)</option>
                        <option value="L3">Licence 3 (L3)</option>
                        <option value="M1">Master 1 (M1)</option>
                        <option value="M2">Master 2 (M2)</option>
                    </select>
                </div>
                <div>
                    <label for="filiere">Filière :</label>
                    <input type="text" name="filiere" id="filiere" placeholder="Entrez votre filière" required>
                </div>
            </div>
            <!-- Ligne 3: EC et Crédits -->
            <div class="form-row">
                <div>
                    <label for="ec_id">Choisir une EC :</label>
                    <select name="ec_id" id="ec_id">
                        <option value="" disabled selected>Choisissez une EC</option>
                        <option value="1">EC11 - Programmation PHP</option>
                        <option value="2">EC12 - Bases de Données</option>
                    </select>
                </div>
                <div>
                    <label for="credits">Crédits :</label>
                    <input type="number" name="credits" id="credits" min="1" max="30" placeholder="Entrez les crédits" required>
                </div>
            </div>
            <!-- Ligne 4: Date d'évaluation -->
            <div class="form-row">
                <div>
                    <label for="date_evaluation">Date d'Évaluation :</label>
                    <input type="date" name="date_evaluation" id="date_evaluation" required>
                </div>
                <div>
                    <label for="note">Note :</label>
                    <input type="number" name="note" id="note" min="0" max="20" step="0.25" placeholder="Entrez la note" required>
                </div>
            </div>
            <!-- Boutons -->
            <div class="form-row">
                <div>
                    <button type="submit" class="save-btn">Enregistrer</button>
                </div>
                <div>
                    <button type="button" class="cancel-btn">Annuler</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>




<style>
 /* Base body styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #F0F4F8;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Header styling */
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

/* Container for the form */
.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
}

/* Styling for the title */
h1 {
    text-align: center;
    font-size: 2rem;
    font-weight: bold;
    color: #2D3748;
    margin-bottom: 20px;
}

/* Form styling */
form {
    background-color: #FFFFFF;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

/* Styling for fields on the same line */
.form-row {
    display: flex;
    gap: 40px; /* Increased space between fields */
    margin-bottom: 20px;
}

.form-row > div {
    flex: 1;
    max-width: 45%; /* Reduced width for fields */
}

/* For labels and inputs */
label {
    display: block;
    font-size: 1rem;
    font-weight: bold;
    color: #4C51BF;
    margin-bottom: 5px;
}

input, select {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 2px solid #E2E8F0;
    border-radius: 8px;
    background-color: #F7FAFC;
    transition: all 0.3s ease;
}

input::placeholder, select option:not(:checked) {
    color: #A0AEC0;
}

input:focus, select:focus {
    outline: none;
    border-color: #4C51BF;
    box-shadow: 0 0 8px rgba(76, 81, 191, 0.4);
}

/* Buttons */
button {
    padding: 8px 15px; /* Reduced size */
    font-size: 0.9rem; /* Smaller text */
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
    width: 100%;
}

button:hover {
    transform: scale(1.05);
}

button:focus {
    outline: none;
    box-shadow: 0 0 8px rgba(76, 81, 191, 0.4);
}

/* Enregistrer button */
button.save-btn {
    background-color: #38A169;
    color: white;
}

button.save-btn:hover {
    background-color: #2F855A;
}

/* Annuler button */
button.cancel-btn {
    background-color: #E53E3E;
    color: white;
}

button.cancel-btn:hover {
    background-color: #C53030;
}

/* Responsive design for small screens */
@media (max-width: 768px) {
    header nav {
        display: flex;
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }

    .form-row {
        flex-direction: column;
    }

    .form-row > div {
        max-width: 100%;
    }
}

</style>