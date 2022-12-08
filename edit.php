<?php
    $id = $_GET['id'];
    include('connection.php');

    $query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id='$id' ");
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Ubah data</h1>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $results[0]['id'] ?>">

        <label for="nama">Nama</label><br>
        <input type="text" name="nama" placeholder="Nama lengkap" value="<?= $results[0]['nama'] ?>">
        <br><br>
        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" id="" cols="30" rows="5"><?= $results[0]['alamat'] ?></textarea>
        <br><br>
        <label for="umur">Umur</label><br>
        <input type="text" name="umur" value="<?= $results[0]['umur'] ?>">
        <br><br>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin">
            <option value="Pria" <?= ($results[0]['jenis_kelamin']== 'Pria')? 'selected' : '' ?>>Pria</option>
            <option value="Wanita"<?= ($results[0]['jenis_kelamin']== 'Wanita')? 'selected' : '' ?>>Wanita</option>
        </select>
        <br><br>
        <button type="submit">Perbaruhi</button>

    </form>
</body>
</html>