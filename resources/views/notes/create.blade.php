


    <h1>Saisie des Notes</h1>
    <form action="{{ route('notes.store') }}" method="POST">
    @csrf <!-- Protection CSRF -->
    
    <label for="ec_id">Choisir une EC :</label>
    <select name="ec_id" id="ec_id">
        <!-- Simuler les options EC ici -->
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



        <style>
            /* Base body styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #F0F4F8; /* Couleur douce de fond */
    margin: 0;
    padding: 0;
    color: #333; /* Texte foncé pour un bon contraste */
}

/* Container for the form */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px;
}

/* Styling for the title */
h1 {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 700;
    color: #2D3748; /* Couleur foncée pour l'intitulé */
    margin-bottom: 40px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Ombre subtile pour le texte */
}

/* Form styling */
form {
    background-color: #FFFFFF;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    animation: fadeIn 1s ease-out;
}

/* Form input, select, and textarea styling */
label {
    display: block;
    font-size: 1.1rem;
    font-weight: bold;
    color: #4A5568; /* Gris plus clair */
    margin-bottom: 10px;
}

select, input[type="number"] {
    width: 100%;
    padding: 12px;
    font-size: 1rem;
    border: 2px solid #E2E8F0; /* Bordure douce gris clair */
    border-radius: 8px;
    background-color: #F7FAFC; /* Fond gris très clair */
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

select:focus, input[type="number"]:focus {
    outline: none;
    border-color: #4C51BF; /* Bordure bleue au focus */
    box-shadow: 0 0 10px rgba(76, 81, 191, 0.4);
    background-color: #E2E8F0; /* Changement de fond au focus */
}

/* Styling for the buttons */
button {
    background-color: #4C51BF; /* Bleu profond */
    color: white;
    padding: 12px 30px;
    font-size: 1.2rem;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    width: 100%;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

button:hover {
    background-color: #2B3A8C; /* Bleu plus foncé */
    transform: scale(1.05); /* Légère augmentation de taille au survol */
}

button:focus {
    outline: none;
    box-shadow: 0 0 8px rgba(76, 81, 191, 0.4);
}

/* Add a container around the form for spacing and centering */
form {
    margin: 0 auto;
    width: 80%;
    max-width: 600px;
    background-color: #FFFFFF;
}

/* Adding a nice smooth fade-in animation for the form */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Styling for the form container and space between the fields */
.mb-6 {
    margin-bottom: 20px;
}

/* Additional feedback message styling */
.feedback-message {
    color: #F56565;
    font-size: 1rem;
    margin-top: 10px;
    text-align: center;
}

/* Styling for the form section (EC field) */
.select-container {
    position: relative;
}

select#ec_id {
    background: linear-gradient(135deg, #6B46C1, #B83280); /* Gradient de fond pour EC */
    color: white;
    font-weight: bold;
}

/* Highlight the select on focus */
select#ec_id:focus {
    outline: none;
    background-color: #2D3748;
}

/* Responsive styling for smaller screens */
@media (max-width: 768px) {
    form {
        width: 90%;
    }

    h1 {
        font-size: 2rem;
    }
}

        </style>