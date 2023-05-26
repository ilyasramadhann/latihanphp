<?php

$member = array(

    array('Nama' => "Ilyas",'NIM' => "494394"), 

    array('Nama' => "Ramadhan",'NIM' => "494399"), 

    array('Nama' => "Ilya",'NIM' => "494394"), 

    array('Nama' => "Rama",'NIM' => "494397"), 

    array('Nama' => "Dhan",'NIM' => "494390"), 

    );

    

foreach ($member as $anggota){

    if ($anggota['NIM'] % 2 == 0) {

        $peran = "Front-end Developer";

    }else {

        $peran = "Back-end Developer";

    }

    

    echo "Nama : ".$anggota['Nama']."<br>";

    echo "NIM : ".$anggota['NIM']."<br>";

    echo "Peran : ".$peran."<br>"."<br>";

}

?>
