<?php

$con = new mysqli('localhost', 'root', '', 'adbucrud');

if (!$con) {
    die(mysqli_error($con));
}
