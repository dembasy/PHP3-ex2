<?php
// definition des variables start (0) et random (chiffres compris entre 1-100(25))
$start = 0;
$random = 25;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex1</title>
  </head>
  <body>
    <p>
<?php
// definition de la boucle avec la fonction while avec le parametre var inferieure a 20,
// on reprend la variable qui a été initialiser a 0 puis on la multiplie a la deuxieme variables,
 // on reprend la variable start definie au dessus du TYPE et on l'incrémente.
while ($start < 20) {
  echo $start * $random;
  $start++;
}
 ?>
 </p>
  </body>
</html>
