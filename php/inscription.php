<?php
    $login=0;
    $nom="nom";
    $mdp="mdp";
    if($_SERVER['REQUEST_METHOD']==="POST"){
        if(isset($_POST['nom'])&& isset($_POST['login']) && isset($_POST['mdp'])){
            if(!Empty($_POST['nom']) && !Empty($_POST['login']) && !Empty($_POST['mdp']))    
                extract($_POST);
            }
    }

    //connexion de la base de donnee
    $con=mysqli_connect("localhost","root","","revisionhtml_php");

    //Requete dans la bd
    
    if(mysqli_query($con,"select * from Personne where login=".'$login')===false){
        echo "Inscription Reussi";
        mysqli_query($con, "INSERT INTO Personne VALUES ('$login', '$nom', '$mdp')");
    }
    

?>

<head>
    <link rel="stylesheet" href="../css/inscription.css">
</head>

<div>
<form method="POST" action="">
    nom: <input type="text" placeholder="nom" name="nom"><br/>
    login: <input type="text" placeholder="login" name="login"><br/>
    mot de passe: <input type="password" placeholder="mot de passe" name="mdp"><br/>
    envoyer: <input type="submit" value="s'inscrire">
</form>
</div>