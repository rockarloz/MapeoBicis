 <?php

 function conectar($servidor)//, $user, $pass, $name)
 {
 //$con = @mysql_connect($servidor, $user, $pass);


 $con = @mysql_connect($servidor, 'usuario', 'contrasena');
 @mysql_select_db('bd', $con); 
 } 
 ?>
