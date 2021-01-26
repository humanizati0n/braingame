<?php

use morozov\MorozovException;
use morozov\MyLog;
use morozov\SolveTwo;

require_once(__DIR__."/vendor/autoload.php");

ini_set("display_errors", 1);
error_reporting (-1);

try {

    $version = file_get_contents("version");
    MyLog::log("Версия:".$version);

    $b = new SolveTwo();
    $ArrayValues = array();

    for ($i=1; $i<4; $i++) {

        echo "Введите ".$i."-й аргумент: ";
        $ArrayValues[]=readline();

    }

    $v1 = $ArrayValues[0];
    $v2 = $ArrayValues[1];
    $v3 = $ArrayValues[2];

    MyLog::log("Введено уравнение ".$v1."x^2 + ".$v2."x+ ".$v3);
    $x = $b->solve($v1, $v2, $v3);


    $str = implode ($x);
    MyLog::log("Корни:".$str);

}

catch (MorozovException $mm) {

    MyLog::log($mm->getMessage());

}

MyLog::write();

?>