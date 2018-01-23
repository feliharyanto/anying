<?php
error_reporting(0);
require_once '../config.php';
    foreach ($_POST['valKK'] as $tai => $kucing){
        $valKK = $_POST['valKK'][$tai];
        $valNama = $_POST['valNama'][$tai];
        $valCluster = $_POST['valCluster'][$tai];

        $blyat = mysql_query("INSERT INTO simpan VALUES(NULL,'".$valKK."','".$valCluster."')");
    }
    exit("<script>window.alert('Data berhasil disimpan');window.history.back();</script>");
    
?>