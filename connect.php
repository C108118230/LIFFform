<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db = mysqli_connect("localhost", "root", "c20001216", "hospital_bed");

mysqli_set_charset($db, 'utf8');

if (!$db) {
    die("連線失敗!!!!!");

    $ssql = "set names utf8";
    mysqli_query($con, $ssql);
}
