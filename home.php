<html >
    <head>
    <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <div class="header">
  <a href="#default" class="logo">HelloUser</a>
  <div class="header-right">
    <a class="active" href="home.php">Accueil</a>
    <a href="index.php">Créer un compte</a>
    <a href="logout.php">Se connecter</a>
    <a href="logout.php">Se deconnecter</a>
  </div>
</div>
    <div class="sucess">
    <p>Liste des utilisateurs</p>
    </div>
    <table>
        
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMAIL</th>
            <th>SEXE</th>
            <th>DATE DE NAISSANCE</th>
        
        <?php 
        require('config.php');
        $query = "SELECT * FROM `utilisateurs`";
        $result = mysqli_query($conn,$query) ;
        while( $user = mysqli_fetch_assoc($result)){
            echo  "<tr>
            <td>{$user['id_utilisateur']}</td>
            <td>{$user['name']}</td>
            <td>{$user['surname']}</td>
            <td>{$user['mail']}</td>
            <td>{$user['gender']}</td>
            <td>{$user['date_of_birth']}</td>
        </tr>";
        }
        ?>
    </table>
  </body>
</html>