<?php

$db = mysqli_connect('localhost','root','adamal2237','webspp');
if(!$db){
    throw new Exception("Database gagal terkoneksi",1);
}

?>