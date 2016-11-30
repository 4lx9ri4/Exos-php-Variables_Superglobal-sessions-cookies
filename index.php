<?php
//Démarrage de la session
session_start();

//Variables de session
$_SESSION['User_Agent'] = "SuperJBon";
$_SESSION['Ip'] = $_SERVER["REMOTE_ADDR"];
$_SESSION['Serveur_Name'] = $_SERVER["SERVER_NAME"];
$_SESSION['nom'] = "Bon";
$_SESSION['prenom'] = "Jean";
$_SESSION['age'] = 30;

//Création des cookies
$log = "SJBon";
$pwd = 1234;
setcookie('log', $log, time() + 365*24*3600, null, null, false, true);
setcookie('pwd', $pwd, time()+ 365*24*3600, null, null, false, true);

//Modification des cookies exo5.zip
setcookie('log', $log, time() + 365*24*3600, null, null, false, true);
setcookie('pwd', $pwd, time()+ 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exos php Variables Superglobal, Sessions, Coockies.</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
  </head>
  <body>
      <main>
          <div>
              <p>Bonjour <?php echo $_SESSION['User_Agent'];?></p>
              <p>Votre adresse Ip est: <?php echo $_SESSION['Ip'];?></p>
              <p>Le nom du serveur est <?php echo $_SESSION['Serveur_Name'];?></p>
              <a href="page2.php"><button type="button" name="button">SUIVANT</button></a>
          </div>
          <form action="index.php" method="post">
              <p>Veuillez entrer vos Identifiants...</p>
              <legend>Login</legend><input type="text" name="log">
              <legend>Mot de passe</legend><input type="text" name="pwd">
              <button type="submit" name="button">VALIDER</button>
          </form>
          <a href="cookies.php"><button type="button" name="button">SUIVANT</button></a>
      </main>
  </body>
</html>
