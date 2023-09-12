<?php

// VARIABEL STRING
$nama = 'KORIUS';
$pesan = 'SELAMAT DATANG';
echo "<h2>" . $pesan . '   '. $nama ."</h2>";
var_dump($nama);

// VARIABEL INT
$x = 10;
$y = 5;

echo " <p> x = " . $x. "</p>";
echo " <p> y = " . $y. "</p>";

$tambah = $x + $y;
echo "<P>" . $tambah . "</p>";

$kurang = $x - $y;
echo "<P>" . $kurang . "</p>";

$kali = $x * $y;
echo "<P>" . $kali . "</p>";

$bagi = $x / $y;
echo "<P>" . $bagi . "</p>";
var_dump($bagi);

// VARIBEL FLOAT UNTUK MENYIMPAN BILANGAN PECAHAN

$x= 23.3;
$y = 4.7;
echo $x;
echo $y;

var_dump($x);


// VARIABEL BOOLEAN
// TRUE atau FALSE
// AND X
// OR +

$a = true;
$b = false;
$or = $a || $b;
$and = $a  && $b;
echo "<br>";
var_dump($or);
var_dump($and);

// VARIABEL ARRAY
//  untuk menyimpan banyak dalam satu variabel

// penulisan lama
$nama = array("korius", "kussa", "billy");

// penulisan baru
$nama_kedua = ['Efati', 'Korius', 'Samuel'];
echo "<br>";
foreach($nama_kedua as $perserta) 
{
    echo $perserta . "<br>";
}
    $data = [
        'nama' => 'Korius',
        'Alamat' => 'expo',
        'Jenis_Kelamin' => 'Laki_laki',
    ];

    echo "<br>";
    echo 'Nama'   . $data [ 'nama'] . '<br>';
    echo 'Alamat'  . $data [ 'Alamat'] . '<br>';
    echo 'Jenis kelamin'  . $data [ 'Jenis_Kelamin'] . '<br>';