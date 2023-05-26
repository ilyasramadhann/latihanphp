<?php

$nama = "ilyas";

$lenght = strlen($nama);

$date = date("d");

if ($date-2 == $lenght) {

    echo "berhasil";

}elseif ($date-2 > $lenght) {

    echo "sedikit lagi";

}else {

    echo "coba lagi";

}

?>
