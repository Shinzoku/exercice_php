<?php

function compteJusque($number)
{
    for ($i = 1; $i <= $number; $i++) {
    echo $i;
    }
}

function input($nb)
{
    for ($i=1 ; $i <= $nb; $i++) {
        echo '<div><input type="text"/></div>';
        }
}

function createForm($array)
{
    foreach($array as $key => $val)
    {
        echo '<form method="POST" action="">';
        echo '<input name="' . $val['name'] . '" type="' . $val['type'] . '" class="' . $val['class'] . '" />';
        echo '</form>';
    }
}