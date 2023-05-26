<?php
    $anggota = array(array("Langit", "50000"), array("Agung", "50001"), array("Sena", "50005"), array("Erge", "50008"), array("Isan", "50004"));
    echo "<b>Pembagian tugas kelompok</b><br><hr>";
    foreach($anggota as $a) {
        if ($a[1] % 2 == 0) {
            $tugas = "Back-end developer";
        }
        else {
            $tugas = "Front-end developer";
        }
        echo $a[0] . " : " . $tugas . "<br>";
    }
?>