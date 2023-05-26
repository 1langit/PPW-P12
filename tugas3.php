<?php
    $nama = array('L', 'A', 'N', 'G', 'I', 'T');
    $kota = array("Lampung", "Riau", "Jambi", "Bengkulu", "Makassar", "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");
    $x = false;
    foreach($nama as $n) {
        foreach($kota as $k) {
            if ($n == $k[0]) {
                echo $k;
                $x = true;
                break;
            }
        }
        if ($x == true) {
            break;
        }
    }
    if ($x == false) {
        echo "Jawa Timur";
    }
?>