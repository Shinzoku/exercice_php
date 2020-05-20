<?php
// $i = 1;
// while ($i <= 10) {
//     echo $i++;
// }

// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
// }

// for( $i = 0; $i <= 10; $i += 2 ) {
//     echo $i;
// }

// for( $i = 1; $i <= 10; $i++){
//     echo '<div>' .$i*$i. '</div>';
// }

// $a = 'bonjour ';
// $b = 'tout le monde';
// echo $a.$b;

$array1 = ["fruits" => ['pomme', 'poire', 'banane']];
$array2 = ["vehicules" => ['voiture', 'motos', 'avion']];
$array3 = ["pays" => ['italie', 'france', 'belgique']];

echo'<ul><li>';
foreach($array1 as $key => $val)
{
    echo $key . '<ul><li>' . $val[0] . '</li><li>' . $val[1] . '</li><li>' . $val[2] . '</li></ul>';
}
echo '</li><li>';
foreach($array2 as $key => $val)
{
    echo $key . '<ul><li>' . $val[0] . '</li><li>' . $val[1] . '</li><li>' . $val[2] . '</li></ul>';
}
echo '</li><li>';
foreach($array3 as $key => $val)
{
    echo $key . '<ul><li>' . $val[0] . '</li><li>' . $val[1] . '</li><li>' . $val[2] . '</li></ul>';
}
echo '</li></ul>';