<?php
echo "here";
if (isset($_POST["submit"])) {
    echo "It works";
} else {
    header("location: ../recovery.php");
}