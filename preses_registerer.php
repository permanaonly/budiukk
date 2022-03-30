<?php
error_reporting(0);
$nik = $_POST['nik'];
$nama = $_POST['name'];

//Cek apakah sudah pernah daftar atau nelum
$data = file("config.txt", FILE_IGNORE_NEW_LINES);

foreach ($data as $value) {
    $pecah = explode("|", $value);

    if ($nik == $pecah[0]) {
        $cek = true;
    }
}

if ($cek) {    ?>
    <script type="text/javascript">
        alert('!!Maaf Nik anda Sudah terdaftar.!!');
        window.location.assign('register.php');
    </script>
<?php } else {
    $format = "\n$nik|$nama";
    $file = fopen('config.txt', 'a');

    fwrite($file, $format);

    fclose($file);
?>
    <script type="text/javascript">
        alert('!!Berhasil Mendaftar!!');
        window.location.assign('index.php');
    </script>
<?php  };
