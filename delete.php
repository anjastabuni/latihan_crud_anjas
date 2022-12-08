<?php
$id = $_GET['id'];
include('connection.php');

$delete = mysqli_query($connect, "DELETE FROM karyawan WHERE id='$id' ");

if($delete)
    header('Location: lish.php');
else
    echo 'gagal dihapus...';


?>