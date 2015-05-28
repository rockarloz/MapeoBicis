
<?php
$host= 'localhost';
$db='nombreBD';
$uid='usuarioBD';
$pwd='contrasenaBD';
$link=mysql_connect($host,$uid,$pwd) or die("Conexion Fallida revisa la base de datos por favor");
mysql_select_db($db) or die("no se encontro la base de datos");
;
$rs=mysql_query("SELECT categoria,subcategoria,nombre,calle,colonia,delegacion,descripcion,contacto,fb,tw,tipo_lugar,rodada_inicio,horario,latitud,longitud  FROM nombretabla");
$total=array();
while ($r=mysql_fetch_array($rs)){
  $respuesta=array();
  if ($r["categoria"]!="") {
    $respuesta["categoria"]=$r["categoria"];
  }
  else{$respuesta["categoria"]="No disponible";}
  
  if ($r["subcategoria"]!="") {
    $respuesta["subcategoria"]=$r["subcategoria"];
  }
  else{$respuesta["subcategoria"]="No disponible";}
  
  if ($r["nombre"]!="") {
  $respuesta["nombre"]=$r["nombre"];}
  else{$respuesta["nombre"]="No disponible";}

  $respuesta["calle"]=$r["calle"];
  $respuesta["colonia"]=$r["colonia"];
  $respuesta["delegacion"]=$r["delegacion"];
  $respuesta["descripcion"]=$r["descripcion"];
  $respuesta["contacto"]=$r["contacto"];
  $respuesta["fb"]=$r["fb"];
  $respuesta["tw"]=$r["tw"];
  $respuesta["tipo_lugar"]=$r["tipo_lugar"];
  $respuesta["rodada_inicio"]=$r["rodada_inicio"];
  $respuesta["horario"]=$r["horario"];
  $respuesta["latitud"]=$r["latitud"];
  $respuesta["longitud"]=$r["longitud"];
  array_push($total, $respuesta);
    //$texto=$texto.$r["subcategoria"]."*".$r["latitud"]."*".$r["longitud"].'*';
}
$bicis=array();
$bicis["bicis"]=$total;
echo "jsonp(". json_encode($bicis).")";
?>

