<?php
$conn = pg_connect('host=localhost port=5432 dbname=ilprimo user=food_admin password=aaa') or die('Could not connect: ' . pg_last_error());

$id = $_GET['newid'];
$sql = "delete from menu where id = ". $id;

echo $sql;
pg_query($conn, $sql);

?>