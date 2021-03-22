<?php

$link = mysqli_connect('localhost', 'root', '', 'resto');

if ($link->connect_errno) {
    echo "failed to connect with MySQL: (" .
        $link->connect_errno . ")" .
        $link->connect_error;
}
