<?php
$arr = [
    's1'=>[
        's2'=>[
            's3'=>'123'
        ]
    ]
];

function get_value($array,$key,$default = null){
    $keys = implode('',array_map(function($v){
        return '["'.$v.'"]';
    },explode('.',$key)));

    return eval('return isset($array'.$keys.')?$array'.$keys.':$default;');
}

echo get_value($arr,'s1.s2.s3');

