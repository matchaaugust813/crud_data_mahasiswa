<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>

    <h1>Tambah Data Mahasiswa</h1>

    <form action="proses/create_proses.php" method="POST">

        <div>
            <label>Nama</label><br>
            <input type="text" name="Nama" required>
        </div>
        <br>

        <div>
            <label>NIM</label><br>
            <input type="text" name="NIM" required>
        </div>
        <br>

        <div>
            <label>Prodi</label><br>
            <select name="Prodi" required>
                <option value="">-- Pilih Prodi --</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
        </div>
        <br>

        <button type="submit">Simpan</button>

    </form>

    <br>
    <a href="index.html">Kembali</a>

</body>
</html>