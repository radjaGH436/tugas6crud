<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>

    <a href="tambah_data.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['npm'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            <td><?= $row['semester'] ?></td>
            <td>
                <a href="edit_data.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="hapus_data.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>