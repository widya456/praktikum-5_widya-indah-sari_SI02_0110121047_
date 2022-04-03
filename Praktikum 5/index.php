<?php
require_once "class_dispenser.php";

$awal = new Dispenser("tidak Ada", "Cocacola", 1);
echo "</br/> volume Awal Galon adalah " . $awal->get_volume(). " ml";
echo "</br/> Harga Segelasnya " . $awal->format_uang( $awal->get_hargaSegelas());
echo "</br/> volume per Gelasnya " . $awal->get_volumeGelas(). " ml";
$pembeli1 = new dispenser("Widya Indah Sari" , "silver", 6);
echo "<br/> <br/> ". $pembeli1->nama. " membeli ".$pembeli1->jumlahBeli. " ". $pembeli1->namaMinuman;
echo "<br/> Sisa volume pada galon ". $pembeli1->namaMinuman. " Sekarang adalah ". $pembeli1->berkurang(). " ml ";
echo "<br/> Total pembayaran adalah ". $pembeli1-> format_uang($pembeli1->bayar());
echo "<br/> Total simpanan galon adalah ". $pembeli1->format_uang($pembeli1->penghasilan());


$pembeli2 = new dispenser("Ali" , "silver", 7);
echo "<br/> <br/>". $pembeli2->nama. " membeli ".$pembeli2->jumlahBeli. " ". $pembeli2->namaMinuman;
echo "<br/> Sisa volume pada galon ". $pembeli2->namaMinuman. " Sekarang adalah ". $pembeli2->berkurang(). " ml ";
echo "<br/> Total pembayaran adalah ". $pembeli2-> format_uang($pembeli2->bayar());
echo "<br/> Total simpanan galon adalah ". $pembeli2->format_uang($pembeli2->penghasilan());
?>