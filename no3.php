<?php

$anggota = array("Ilyas","Ramadhan","Sigit");

$kota = array("Lampung","Riau","Jambi","Bengkulu","Makassar","Kendari","Gorontalo","Samarinda","Papua","Nusa Tenggara Barat");

foreach ($anggota as $member){

    $lokasi = "";

    foreach ($kota as $town){

        if (substr($member,0,1) == substr($town,0,1)) {

            $lokasi = $town;

        }

    }

    if ($lokasi == "") {

            $lokasi = "Jawa Timur";

    }

    echo "Nama : ".$member."<br>";

    echo "Lokasi : ".$lokasi."<br>"."<br>";

    

}

?>
