<?php
 require_once('funciones.php');
 conectar('localhost');
 //Recibir
 //if (isset($_POST['categoria']) && isset($_POST['subcategoria']) && isset($_POST['nombre'])&& isset($_POST['calle'])&& isset($_POST['colonia'])&& isset($_POST['delegacion'])&& isset($_POST['descripcion'])&& isset($_POST['contacto'])&& isset($_POST['fb'])&& isset($_POST['tw'])&& isset($_POST['tipo_lugar'])&& isset($_POST['horario'])&& isset($_POST['latitud'])&& isset($_POST['longitud'])&& isset($_POST['rodada_inicio'])) {
if (isset($_POST['subcategoria']) && isset($_POST['nombre'])&&  isset($_POST['colonia'])&& isset($_POST['descripcion'])&& isset($_POST['contacto'])&&  isset($_POST['horario'])&& isset($_POST['latitud'])&& isset($_POST['longitud'])) {
 if ( $_POST['subcategoria']!=""|| $_POST['nombre']!=""|| $_POST['colonia']!="") 
   {
      if ($_POST['latitud']!=0|| $_POST['longitud']!=0) 
      {
        # code...
           if ($_POST['categoria']=="") 
           {
              $categoria = "Sociales";
           } else{
             $categoria = strip_tags($_POST['categoria']);
          }
         
           $subcategoria = strip_tags($_POST['subcategoria']);
           $nombre = strip_tags($_POST['nombre']);
           $calle = strip_tags($_POST['calle']);
           $colonia = strip_tags($_POST['colonia']);
           $delegacion = strip_tags($_POST['delegacion']);
           $descripcion = strip_tags($_POST['descripcion']);
           $contacto = strip_tags($_POST['contacto']);
           $fb = strip_tags($_POST['fb']);
           $tw = strip_tags($_POST['tw']);
           $tipo_lugar = strip_tags($_POST['tipo_lugar']);
           $horario = strip_tags($_POST['horario']);
           $rodada_inicio = strip_tags($_POST['rodada_inicio']);
           $latitud = strip_tags($_POST['latitud']);
           $longitud = strip_tags($_POST['longitud']);
             $meter = @mysql_query('INSERT INTO tabla (categoria, subcategoria, nombre,colonia,descripcion,contacto,fb,tw,horario, latitud,longitud) values ("'.mysql_real_escape_string($categoria).'", "'.mysql_real_escape_string($subcategoria).'", "'.mysql_real_escape_string($nombre).'", "'.mysql_real_escape_string($colonia).'", "'.mysql_real_escape_string($descripcion).'", "'.mysql_real_escape_string($contacto).'", "'.mysql_real_escape_string($fb).'", "'.mysql_real_escape_string($tw).'",  "'.mysql_real_escape_string($horario).'", "'.mysql_real_escape_string($latitud).'", "'.mysql_real_escape_string($longitud).'")');
             if($meter)
             {
               echo 'Tu registro se ha efectuado correctamente';
             }
             else{
               echo 'Hubo un error en el registro.';
              } 
      }
      else{
        echo "Arrasta el marcador del mapa al lugar donde robaron la bici";
      }
 }
else{
  echo "Introduce todos los parametros 1";
 }
}
 else{
  echo "Introduce todos los parametros 2";
 }
 ?>
