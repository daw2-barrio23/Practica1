<?php
session_unset();
?>
<html>
 <head>
  <title>Identificate</title>
 </head>
 <body>
  <form method="post" action="Filial.php">
   <p>Pon tu usuario: 
    <input type="text" name="user"/>
   </p>
   <p>Pon tu Contraseña: 
    <input type="password" name="pass"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>