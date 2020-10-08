<?php

include "connection.php";

// var_dump($_POST);1

$update=$db->exec("update siswa set nama='".$_POST['nama']."',pekerjaan='".$_POST['pekerjaan']."'where id_siswa=".$_POST['id_siswa']);

if($update)
{
    header("Location:index.php");
}

