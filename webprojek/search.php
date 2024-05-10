<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB2', 'web_projek');

// Buat Koneksinya
$db2 = new mysqli(HOST, USER, PASS, DB2);
$provinsi = $_POST['provinsi'];

$sql = "SELECT * FROM search WHERE provinsi LIKE '$provinsi%'";
$query = mysqli_query($db2,$sql);
$data='';
while($row = mysqli_fetch_assoc($query))
{
    $data .=  "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['description']."</td><td>".$row['Provinsi']."</td></tr>";
}
echo $data;
?>