<?php
    setcookie("nickname", "", time() - 3600);
    header("Location: index.php");
?>