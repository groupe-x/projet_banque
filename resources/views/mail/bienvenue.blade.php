<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Pruni Banque , Bienvenue </title>
</head>
<body>
<div>
   <p>Bonjour,<br>Mr {{$user->nom}} à envoyer une demande de creation de compte <br>
    Merci de verfier les informations et de valider la demande du client</p> <br>
<p>
    nom & prenom : {{$user->nom}} {{$user->prenoms}} <br>
    email : {{$user->email}} <br>
    numero : {{$user->numero}} <br>
    numero piece d'identité : {{$user->num_piece}} <br>
    date de naissance : {{$user->dateNaissance}} <br>
</p>
</div>

<span>**pour valider veillez clicquez sur le bouton ci dessous</span> <br>
<span>***s'il s'agit d'une erreur veillez ne rien faire </span> <br> <br>

<a href="http://prubanque.me/validation/{{$user->id}}" style="border:1px solid black;font-size:20px;color:black;padding:5px;" class="btn btn-outline-dark">Valider</a>
</body>
</html>
