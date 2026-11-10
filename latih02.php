<?php
   // percabangan if pada PHP

   $nilai = 70;

   // beri keterangan lulus apabila nilai 65 ke atas

   if( $nilai >= 65 ){
    $ket = "lulus";
   }else{
    $ket = "tidak lulus";
   }

   echo "keterangan: ". $ket;