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

    <form action="contact.php" method="GET">
        Votre prénom :<input type="text" name="prenom" placeholder="Votre prénom">
        Votre nom :<input type="text" name="nom" placeholder="Votre nom">
        Votre email :<input type="text" name="email" placeholder="Votre email">
        Votre téléphone :<input type="text" name="telephone" placeholder="Votre téléphone">
        Votre adresse :<input type="text" name="adresse" placeholder="Votre adresse">

        <input type="reset" value="Annuler">
        <input type="submit" name="sub" value="Envoyer">
    </form>

</body>

</html>