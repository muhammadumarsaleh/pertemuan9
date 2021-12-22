<?php
// tugas2
// buat array[1,5,6,7,11,17,18,20];
// cetak isi dalam array yang termasuk bilangan prima,
// catak dari bilangan prima terbesar.


// $angka = [1,5,6,7,11,17,18,20];

function cek_prima($angka) {
    if ($angka >= 2 ) {

        $jumlah_faktor_pembagi = 0;

        for ($pembagi=1; $pembagi <= $angka ; $pembagi++) {

            if ($angka % $pembagi === 0 ) {

                $jumlah_faktor_pembagi++;
            }
        }

        if (jumlah_faktor_pembagi === 2) {

            return $angka . ' = prima<br>';

        }else{

            return $angka . ' = bukan prima \<br>';
        }
    }else{

        return "angka harus lebih besar atau samadengan 2";
    }

}

cek_prima(17 );




?>