<?php

$animals =['dog', 'cat', 'chicken'];

function dd($data)
{
    echo '<pre>';
    var_dump($data);

    echo '</pre>';
}

dd($animals);

function restriction($gender)
{
    if($gender < 18)
    {
        echo "You not old enough to enter this club house";
    }else {
        echo "You are Welcome";
    }
}

restriction(20);
