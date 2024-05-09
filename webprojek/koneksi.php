<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'web_projek');

// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);
$query = " 
SELECT provinsi FROM search
 ORDER BY provinsi ASC
 ";
$result = $db1->query($query);

?>
