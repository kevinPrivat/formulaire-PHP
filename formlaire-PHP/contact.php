<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    $name = $_GET['nom'] ;
    $prenom = $_GET['prenom'];
    $email = $_GET['email'];
    $telephone = $_GET['telephone'];
    $adresse = $_GET['adresse']; 

    if(empty($_GET['nom']) || empty($_GET['prenom']) || empty($_GET['email']) || empty($_GET['telephone']) || empty($_GET['adresse'])) {
echo 'Champs manquants';

} else {

    echo 
    "<table>

  <tr>
    <th>Nom</th>
    <td>$name</td>
  </tr>

  <tr>
    <th>Prénom</th>
    <td>$prenom</td>
  </tr>

  <tr>
    <th>Email</th>
    <td>$email</td>
  </tr>

  <tr>
    <th>Téléphone</th>
    <td>$telephone</td>
  </tr>

  <tr>
    <th>Adresse</th>
    <td>$adresse</td>
  </tr>

</table>";
};

?> 
</body>
</html>
