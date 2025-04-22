<?php
$db_conn = pg_connect("host=127.0.0.1 dbname=chamorik_ru user=postgres password=password")
   or die("Connection error: " . pg_last_error());
?>
