<html>
    <head>
    
    <link rel="stylesheet" href="style.css" />
        <title>
        Bienvenue
        </title>
    </head>
    
    <form class="box" action="./register.php" method="post">
    <h3>Creation d'utilisateur</h3>
  <input type="text" class="box-input" name="name" placeholder="Nom" required />
  <input type="text" class="box-input" name="surname" placeholder="Prenom" required />
    <input type="email" class="box-input" name="email" placeholder="Email" required />
    <label>Date de naissance</label>
    <input type="date" class="box-input" name="date_of_birth" placeholder="date of birth" required />
   <label>Sexe</label>
    <select name="gender" class="box-input" required >
       <option value="M">M</option>
       <option value="F">F</option>
   </select>
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="Creer mon compte" class="box-button" />
    <p class="box-register">Vous avez djà un compte? <a href="connexion.php">Connectez-vous</a></p>
</form>
</html>