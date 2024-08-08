<?php 
//kOMENTAR DAN JENISJENIS NYA
// Komentar untuk 1 bARIS 
//  gunakan shortcut untuk komewntar itu "Ctrl + /"
/*
komentar untuk banyak baris
*/

//Standar Output Form
//Bentuk Umum . echo dan print
echo "ahmad fausi febrian";
print "Tetap Print ahmad fausi febrian";
//Bentuk Lain, print_r
print_r("Bentuk lain standar output khusu untu mencetak array");
var_dump("Ahmad fausi febrian"); //digunakan untuk melihat isi dari variabel dimana disini akan berisi tipe datanya dan jumlah dari datanya

//beberapa hasil dari standart output dan cara keluarnya
echo "ahmad fausi febria";//umum
echo 123; //untuk angka
echo true; //bolean (hailnya = 1)
echo false; //hasilnya nol tapi tidak terbaca atau nolnnya tidak tertampilkan
// Aturan Tanda petik, Petik dua dan satu tidak berbeda tapi untuk mengatasi dalam kalimat digunakannya tanda petik satu 
// misal penulisan 'jum'at' bakalan error, maka dari itu disini digunakan petik dua "jum'at" maka tidak error


//Penulisan sintaks dalam PHP
/*
    1. PHP di dalam HTML
    2. HTML didalam HP 
*/

// Contoh1

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <p> Perkenalakan nama saya <?php echo "ahmadfausifebrian"; ?> .Ini merupakan contoh1</p>
    
    <?php
        echo "<h1>Halo Selamat Datang di Web Ahmd Fausi</h1>";
    ?>


</body>
</html>

<?php 
// Varibel dan Tipe Data
// Variabel
// aturan nya pertamatidakboleh diawali dengan angka 
// tidak mengunakan tandda kutip satu contohnya 
    /*
    $nama = "ahmad fausi febrian "
    echo 'nama saya $nama';
    
    hasil diatas akan hanay menampilkan $nama bukan isinya
    */
// yang benaritu berikut 
$nama = "ahmad fausi febrian";

echo "Perkenalakan nama saya adalah $nama\n";

// Operator
// Artimatika
// + - * / %
$x = 10;
$y = 20; 
echo $x + $y; 
// hasilnya akan menunjuklkan 30

//Penggabungan String / Concatenation / concat
// .
$nama_depan = "ahmad fausi" ;
$nama_belakang = "febrianZzz";
echo $nama_depan . $nama_belakang;
echo $nama_depan . " " . $nama_belakang ."\n";

// assigment
// =, +=, -=, /=, .=
$nama = "fauzy";
$nama .= " ";
$nama .= "ahmadzz";

echo $nama;

$angka = 2;
$angka += 4;
echo $angka;

// perbandingan
// <, >, <=, >=, ==, !=
var_dump( 2 > 5); //hasilnya berupa boolean untuk memperlihatkan true or false
var_dump( 4 == "4");
// kekurangannya dalam segi hanya memastikan nilai nya sama dan tidak memperhatikan tipe data nya baik itu string ataupun int.

//identitas
// ===, !==
var_dump( 4 === "4"); // disini dia kelebihannya bahkan sampai mengecek tipe datanya sama pebandingannya atau tidak. dimana disini hasilnya itu false.

// Logika
// &&, ||, !

$h = 10;
var_dump($h < 20 && $h % 2 == 0); //Perlu untuk kedua nya untuk bersifat benar untuk membuat boleannya True, jadi jika hanya satu maka akan bersidfat false.
var_dump($h > 20 && $h % 2 == 0); // ghasilnya akan false

var_dump($h > 29 || $h % 2 == 0); // Hanya perlu minimal satu kondisi untuk membuanya bersifat True.

?>

