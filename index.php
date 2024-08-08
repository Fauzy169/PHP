<?php
// pengulangan
// for
// while
// do... while
// foreach : pengulangan khusus array

// for
for ( $i = 0; $i < 5; $i++){
    echo "Hello World!! <br>";
}

// while
$i = 0;
while ( $i < 5 ) {
    echo "Lakukan Pengulanagnan While !! <br>";

$i++;
}

// do
$i = 0;
do {
    echo "Lakukan Perulangan Do Selama While !! <br>";
$i++;
}
while ($i < 5);

// contoh pebedaannya while dengan do..while
// jika while akan melakukan kondisinyaselamahasilnya true, tetapi jika tidak maka akan berhenti dan tidak akan menghasilkan apapun
// sedangkan do akan melakukan satu kali hasil terlebih dahulu lalu mengecek kondisinya apakah true atau pujn false, jika true maka akan melakukan sampai kondisinya terpenuhi atau bernilai false.

// contoh penerapannya 
$i = 10;
do {
    echo "Contoh Do tetap berjalan sekali !!<br>";
$i++;
} 
while ($i<5);

?>