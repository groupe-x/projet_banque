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
   <p>Bonjour,<br>Mr {{$user->nom}} {{$user->prenoms}} votre demande de creation de compte a été validé</p> <br>
   merci de prêter attention au information ci dessous <br>
<p>
    nom & prenom : {{$user->nom}} {{$user->prenoms}} <br>
    email : {{$user->email}} <br>
    numero : {{$user->numero}} <br>
    numero piece d'identité : {{$user->num_piece}} <br>
    date de naissance : {{$user->dateNaissance}} <br>
</p>
<p>
    <br>
    @php
        $cpt=DB::table('comptes')->where('id_client',$user->id)->first();
        $type_compte = DB::table('type_comptes')->where('id',$cpt->id_typecompte)->first();
    @endphp
    numero de compte : {{$cpt->numeroCompte}} <br>

    solde initial : {{$cpt->solde}} <br> <br>
    [pour vous connecter a votre espace veuillez utiliser les informations suivantes] <br>
    email : {{$user->email}} <br>
    password : passe123 <br>
</p>
</div>

<span>****apres votre première connexion veillez modifier votre mot de passe pour la securité de votre compte</span> <br>
<span>**s'il s'agit d'une erreur veillez ne rien faire </span> <br> <br>

<a href="http://prubanque.me/login" style="border:1px solid black;font-size:20px;color:black;padding:5px;">Connexion</a>

</body>
</html>
