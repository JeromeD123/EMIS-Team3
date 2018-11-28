<?php
include 'connect.php';

$conn = OpenCon();

echo "connected successfully";

CloseCon($conn);
?>
