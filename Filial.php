<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;
setcookie("username","Nico",time()+60);

//Check username and password information
if (($_SESSION['username'] == 'Nico') and
    ($_SESSION['userpass'] == '101101')) {
    $_SESSION['authuser'] = 1;
} else {
    echo 'Tu no eres quien esperaba';
    exit();     
}
?>
<html>
 <head>
  <title>Hola!!!</title>
 </head>
 <body>
<?php

$fechaActual = date('d-m-Y');
echo $fechaActual;

echo "<br>";
echo "<br>";

$myfavmovie = urlencode("Life of Brian");
echo "<a href='N2P111MovieSite.php?favmovie=$myfavmovie'>";
echo "Entra"; 
echo "</a>";
?>
 </body>
</html>