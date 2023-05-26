<?php
    $nama = "Langit";
    if (strlen($nama) == date("d") - 2) {
        echo "berhasil";
    }
    elseif (strlen($nama) < date("d") - 2) {
        echo "sedikit lagi";
    }
    else {
        echo "coba lagi";
    }
?>