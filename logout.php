<?php
session_start();
session_destroy();
?>
<script type="text/javascript">
    alert('Anda Telah Logout');
    window.location.assign('index.php');
</script>