<?php
    // Definisikan Konstanta
    define('PHI', 3.14);
    define('DBNAME', 'inventory');
    define('DBSERVER', 'localhost');

    $jari = 8;
    $luas = PHI * $jari**2;
    $keliling = 2* PHI * $jari;

    echo 'Luas Lingkaran dengan Jari-jari ' . $jari . ' = ' . $luas;
    echo '<br/>Kelilingnya = ' . $keliling;
?>
<hr/>
<?php
    echo 'Nama Databasenya : ' . DBNAME;
    echo '<br/>Lokasi databasenya ada di : ' . DBSERVER;
?>