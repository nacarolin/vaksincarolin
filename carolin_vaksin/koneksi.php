<?php
$koneksi = new mysqli('localhost','root','','vaksinca') or die(mysqli_error($koneksi));

if(isset($_POST['simpan'])){
    $idPasien = $_POST['idPasien'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nama, jk, alamat) values ('$idPasien','$nama','$jk','$alamat')");

    header('location:pasien.php');
}

if(isset($_GET['idPasien'])){
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien WHERE idPasien='$idPasien'");
    header('location:pasien.php');
}

if(isset($_POST['edit'])){
    $idPasien = $_POST['idPasien'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET idPasien='$idPasien', nama='$nama', jk='$jk', alamat='$alamat'");
    header('location:pasien.php');
}
?>

<?php
session_start();
$koneksi = new mysqli('localhost','root','','vaksinca') or die(mysqli_error($koneksi));

if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = sha1($_POST['password']);
    $query = $koneksi->query("SELECT * FROM user WHERE
    username='$username' and password='$password'");
    $num = mysqli_num_rows($query);  
    $c = mysqli_fetch_array($query);
    if ($num > 0) {
        $_SESSION['username'] = $c['username'];
        $_SESSION['nmUser'] = $c['nmUser'];
        header("location:index.php");
    } else {
        echo "Gagal";
    }
}
?>