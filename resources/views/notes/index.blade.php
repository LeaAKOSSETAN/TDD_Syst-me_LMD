<!DOCTYPE html>
<html>
<head>
    <title>Liste des Notes</title>
</head>
<body>
    <h1>Liste des Notes</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Année</th>
                <th>Filière</th>
                <th>Note</th>
                <th>Session</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->etudiant_nom }}</td>
                    <td>{{ $note->etudiant_prenom }}</td>
                    <td>{{ $note->annee_etude }}</td>
                    <td>{{ $note->filiere }}</td>
                    <td>{{ $note->note }}</td>
                    <td>{{ $note->session }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
