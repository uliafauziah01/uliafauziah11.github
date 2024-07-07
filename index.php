<?php 
if (isset($_POST['InputNama'])){ 
    $nama = $_POST['nama']; 
    echo "Nama Lengkap: <b>$nama</b><br>";
}
?>

<?php
if (isset($_POST['InputTeman'])) {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];
    $nama4 = $_POST['nama4'];
    echo "<b>Nama orang-orang yang anda sayang: </b><br>";
    echo "1. $nama1 <br>";
    echo "2. $nama2 <br>";
    echo "3. $nama3 <br>";
    echo "4. $nama4 <br>";
}
?>

<?php
if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "2300018348" && $pass == "uliafauziah") {
        echo "<h2>Login berhasil, selamat</h2>";
    } else {
        echo "<h2>Login Gagal, maaf ulang lagi</h2>";
    }
}
?>

<?php
if (isset($_POST['Pilihkota'])){
    $kota = $_POST['prodi'];
    echo "kota yang anda pilih adalah: <b><font color='red'>$kota</font></b><br>";
}
?>

<?php
if (isset($_POST['PilihBuah'])){
    echo "Buah favorit saudara adalah: <br>";
    if (isset($_POST['buah'])){
        foreach ($_POST['buah'] as $buah){
            echo "+ $buah <br>";
        }
    }
}
?>

<?php
if (isset($_POST['PilihKartun'])){
    $film = $_POST['kartun'];
    echo "Film Kartun Favorit Anda adalah: <font color=blue><b>$film</b></font><br>";
}
?>

<?php
if (isset($_POST['PilihListAnime'])){
    $film = $_POST['listanime'];
    echo "Film Anime Favorit Saudara adalah: <font color=blue><b>$film</b></font><br>";
}
?>

<?php
if (isset($_POST['ProsesSaran'])){
    $saran = nl2br($_POST['saran']);
    echo "Kritik/Saran Saudara adalah: <br>";
    echo "<font color=blue><b>$saran</b></font><br>";
}
?>

</body>
</html>