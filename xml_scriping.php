<?php
$site = "https://www.tcmb.gov.tr/kurlar/today.xml";
$baglan = simplexml_load_file($site);


// Tüm bilgileri Çekelim
$diziName = array();
$diziBuy=array();
$diziSales=array();
for ($i=0; $i < 21; $i++) { 
    $diziName[$i] = $baglan->Currency[$i]->Isim;
    $diziBuy[$i] = $baglan->Currency[$i]->ForexBuying;
    $diziSales[$i] = $baglan->Currency[$i]->ForexSelling;
}


echo "<center><table border=1 width=40% height=40% ><tr style='text-align:center; font-weight:bold;'><td>İsim</td><td>Alış</td><td>Satış</td></tr>";
for ($i=0; $i <count($diziName) ; $i++) { 
     echo "<tr><td>".$diziName[$i]."</td><td>".$diziBuy[$i]."</td><td>".$diziSales[$i]."</td></tr>";
}
echo "</table></center>";


//xml dosyasının html çıktısını gör.
// echo "<pre>";
//    print_r($baglan);
?>