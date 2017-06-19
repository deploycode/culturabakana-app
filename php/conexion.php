<?php

  header('content-Type:text/html;charset=UTF-8');
  date_default_timezone_set('America/Bogota');
  setlocale(LC_ALL,"es_CO.UTF8");
  $conn=@mysql_connect("localhost","root","") or die (mysql_error());
  mysql_select_db("");
  mysql_set_charset('utf8');
  $debug=true;

?>
