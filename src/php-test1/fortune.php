<?php

function Fortune($pull){
    $number = rand(1,200);
    if($number%4 == 0){
        $fortune = '大吉';
    }
    elseif($number%4 == 1){
        $fortune = '小吉';
    }
    elseif($number%4 == 2){
        $fortune = '吉';
    }
    else{
        $fortune = '凶';
    }

    return $fortune;
}
