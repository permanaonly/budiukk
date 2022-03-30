<?php
session_start();
$nik = $_SESSION['nik'];
$nama = $_SESSION['nama'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$format = "\n$nik|$nama|$tanggal|$jam|$lokasi|$suhu";

$file = fopen('catatan.txt', 'a');

fwrite($file, $format);


fclose($file);
?>
<script type="text/javascript">
    alert('!!Berhasil Menyimpan Data!!');
    window.location.assign('user.php?url=catatan_perjalanan');
</script>