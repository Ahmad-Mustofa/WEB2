<?php
require_once "class_lingkaran.php";
echo "NILAI PHI " . Lingkaran::PHI;
// instansiasi object Lingkaran
$lingkar1 = new Lingkaran( 23 ) ;
$lingkar2 = new Lingkaran( 10 ) ;
// memanggil method dari object
echo "<br/>Luas Lingkaran 1= " .$lingkar1->getLuas();
echo "<br/>Luas Lingkaran 2= " .$lingkar2->getLuas();

echo '<br>';

echo "<br/>Keliling Lingkaran 1= " .$lingkar1->getKeliling();
echo "<br/>Keliling Lingkaran 2= " .$lingkar2->getKeliling();
?>