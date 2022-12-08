<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah data</h1>

    <form action="insert.php" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" placeholder="Nama lengkap">
        <br><br>
        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" id="" cols="30" rows="5"></textarea>
        <br><br>
        <label for="umur">Umur</label><br>
        <input type="text" name="umur">
        <br><br>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br><br>
        <button type="submit">Tambah</button>

    </form>
</body>
</html>