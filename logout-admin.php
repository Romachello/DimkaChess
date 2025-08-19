<?php
session_start();
session_destroy();
header("Location: admin-page.php");
exit();
?>