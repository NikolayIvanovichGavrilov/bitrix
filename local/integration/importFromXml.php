<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
pre('start');
#-------------ТУТ ВАШ КОД
#Что нужно сделать: Загрузить XML в PHP (рекомендую simplexml_load_file). Далее вывести на экран каждый элемент со свойствами
#Цель: Аккуратно окунуть Вас в работу с самим PHP и посмотреть у кого возникнут сложности с чистым PHP. Далее мы имея данные в массивах/обьектах научимся загружать это непосредственно в Bitrix.
echo '<pre>';
$path = 'data/data.xml';
if(file_exists($path)) {
    foreach (json_decode(json_encode(simplexml_load_file($path)), true) as $products) {
        var_dump($products);
    }
}
echo '</pre>';
#-------------КОНЕЦ КОДА
pre('done.');