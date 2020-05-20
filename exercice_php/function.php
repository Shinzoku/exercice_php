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