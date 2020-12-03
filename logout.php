<?php
session_start();
session_destroy();
?>
<script>
    localStorage.removeItem("userData");
    location.replace("index.php");
</script>