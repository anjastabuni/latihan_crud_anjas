<?php
$keyword = $_GET['keyword'];
include('connection.php');

$search = mysqli_query($connect, "SELECT * FROM karyawan WHERE nama='$keyword'");
$results = mysqli_fetch_all($search, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CRUD</title>
</head>
<body >
    <h1>NAMA KARYAWAN</h1>
    <a href="add.php">Tambah Data</a>
    <br><br>
    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Keyword .." value="<?= $_GET['keyword']?>"/>
        <button type="search">Cari</button>
    </form>
    <br>
    <table border="1px">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Pilihan</th>
        </tr>
        
        <?php foreach($results as $result) :?>
            <tr>
                <td><?= $result['nama']?></td>
                <td><?= $result['alamat']?></td>
                <td><?= $result['umur']?></td>
                <td><?= $result['jenis_kelamin']?></td>
                <td>
                    <a href="edit.php?id=<?= $result['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $result['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>