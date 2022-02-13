<?php
require('config.php');
if (isset($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['password'], $_REQUEST['gender'], $_REQUEST['date_of_birth'])){
    // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($conn, $name); 


    $surname = stripslashes($_REQUEST['surname']);
    $surname = mysqli_real_escape_string($conn, $surname); 
    // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['date_of_birth'];
 //requéte SQL + mot de passe crypté
 $query = "INSERT into `utilisateurs` ( name, mail, pass_word, gender, date_of_birth, surname)
 VALUES ('$name', '$email', '".hash('sha256', $password)."', '$gender', '$dob', '$surname')";
 // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "
       <html>
       <head>
       <link rel='stylesheet' href='style.css' /></head>
       <div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='connexion.php'>connecter</a></p>
           </div>
           </html>
           ";
           
    }
}else {
echo('LesChamps sont incorrects');
}
 ?>