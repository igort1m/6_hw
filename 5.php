<?php
$lang = "ru";
$month = 3;
$arr = array(
    "ru"=>array("Ян", "Фв", "Мр", "Ап",),
    "en"=>array("Jn", "Fb", "Mr", "Ap",),
);
if ($lang == "ru")
{
    $result = $arr[$lang][$month];
}
if ($lang == "en")
{
    $result = $arr[$lang][$month];
}
echo $result;
