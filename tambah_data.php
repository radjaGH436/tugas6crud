<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $npm      = $_POST['npm'];
    $nama     = $_POST['nama'];
    $jurusan  = $_POST['jurusan'];
    $semester = $_POST['semester'];

    $query = "INSERT INTO mahasiswa (npm, nama, jurusan, semester) 
              VALUES ('$npm', '$nama', '$jurusan', '$semester')";

    mysqli_query($conn, $query);

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>NPM:</label><br>
        <input type="text" name="npm" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>