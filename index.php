<?php

ini_set("display_errors", 1);
error_reporting(-1);

use Abbdinvasilyeva\MyLog;
use Abbdinvasilyeva\AbbdinvasilyevaException;
use Abbdinvasilyeva\QuEquation;

require_once "core\EquationInterface.php";
require_once "core\LogAbstract.php";
require_once "core\LogInterface.php";
require_once "Abbdinvasilyeva\MyLog.php";
require_once "Abbdinvasilyeva\Equation.php";
require_once "Abbdinvasilyeva\QuEquation.php";
require_once "Abbdinvasilyeva\AbbdinvasilyevaException.php";

try {
    $b = new QuEquation();
    $values = array();

    for ($i = 1; $i < 4; $i++) {
        echo "Введите  " . $i . "аргумент: ";
        $values[] = readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Введено уравнение " . $va . "x^2 + " . $vb . "x + " . $vc . " = 0");
    $x = $b->solve($va, $vb, $vc);

    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: " . $str);
} catch (abbdinvasilyevaException $e) {
    MyLog::log($e->getMessage());
}

MyLog::write();

?>