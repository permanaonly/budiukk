<?php

$nik = $_POST['nik'];
$nama = $_POST['name'];

$format = "$nik|$nama";

$file = file('config.txt', FILE_IGNORE_NEW_LINES);

if (in_array($format, $file)) {
    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama'] = $nama;

    header("Location:user.php");
} else {     ?>
    <script type="text/javascript">
        alert('!!Maaf Nik dan anda belum terdaftar.!!');
        window.location.assign('index.php');
    </script>
<?php    }
