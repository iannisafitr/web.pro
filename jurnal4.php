<?php
include "configdbjurmal4.php";

// Mengirimkan query ke MySQL
$sqlStatement = "SELECT * FROM db_perpustakaan";
$query = mysqli_query($conn, $sqlStatement);

// Menangkap record hasil query
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

// Menutup koneksi ke MySQL
mysqli_close($conn);
?>

<h1>Data Buku</h1>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $buku) { ?>
        <tr>
            <td><?= ++$key ?></td>
            <td><?= $buku['judul'] ?></td>
            <td><?= $buku['pengarang'] ?></td>
            <td><?= $buku['tahun_terbit'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>