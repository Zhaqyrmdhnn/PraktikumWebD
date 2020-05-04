<?php
include_once("koneksi.php");

$hasil = mysqli_query($mysqli, "SELECT* FROM tb_biodata ORDER BY nim")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
table, tr, td{
    border: 2px solid #000000;
}
</style>
<body>
<div class="tubuh">
<h1>Biodata Mahasiswa</h1>
<a href="tambah.php">Tambah Biodata</a>
    <table border="1" cellpadding="8px">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($user = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$user['nama']."</td>";
            echo "<td>".$user['nim']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['alamat']."</td>";
            echo "<td><a href='edit.php?nim=$user[nim]'>Edit</a> | <a href='hapus.php?nim=$user[nim]'>Delete</a></td></tr>"; 
        }
        ?>
    </table>
    </div>   
</body>
</html>
