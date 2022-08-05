<?php
$tgl_database = date("2022-07-27");
$tgl_now = date("Y-m-d");

if ($tgl_now > $tgl_database) {
    echo "Benar";
} else {
    echo "Salah";
}
