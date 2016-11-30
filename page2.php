<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exos php Variables Superglobal, Sessions, Coockies.</title>
    <link rel="stylesheet" href="style2.css" media="screen" title="no title">
  </head>
  <body>
      <main>
          <div>
              <p><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'];?></p>
              <p>Vous êtes âgé de <?php echo $_SESSION['age'];?> ans!</p>
          </div>
      </main>
  </body>
</html>
