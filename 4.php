<?php
$lang = "en";
$day = 3;
$arr = array(
    'ru'=>array(1=>'Пн', 2=>'Вт', 3=>'Ср', 4=>'Чт', 5=>'Пт', 6=>'Сб', 7=>'Вс'),
    'en'=>array(1=>'Mn', 2=>'Ts', 3=>'Wd', 4=>'Th', 5=>'Fr', 6=>'St', 7=>'Sn'),
);
if ($lang == 'ru')
{
    $result = $arr[$lang][$day];
}
if ($lang == 'en')
{
    $result = $arr[$lang][$day];
}
echo $result;
