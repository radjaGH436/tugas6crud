<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
$row = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {
    $npm      = $_POST['npm'];
    $nama     = $_POST['nama'];
    $jurusan  = $_POST['jurusan'];
    $semester = $_POST['semester'];

    $queryUpdate = "UPDATE mahasiswa SET 
                    npm = '$npm', 
                    nama = '$nama', 
                    jurusan = '$jurusan', 
                    semester = '$semester' 
                    WHERE id = $id";

    mysqli_query($conn, $queryUpdate);

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>NPM:</label><br>
        <input type="text" name="npm" value="<?= $row['npm'] ?>" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="<?= $row['jurusan'] ?>" required><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" value="<?= $row['semester'] ?>" required><br><br>

        <button type="submit" name="update">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>