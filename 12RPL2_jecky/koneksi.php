<?php
$koneksi = new mysqli('localhost', 'root', '', 'jecky')
    or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO Pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien', '$nmPasien', '$jk', '$alamat')");

    header("location:Pasien.php");
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM Pasien where idPasien = 'idPasien'");
    header("location:Pasien.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE Pasien SET idPasien='$idPasien', nmPasien='$nmPasien', jk='$jk', alamat='$alamat'");
    header("location:Pasien.php");
}
if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM Pasien where idPasien = '$idPasien'");

    header("location:Pasien.php");
}
