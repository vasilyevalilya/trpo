<?php

ini_set("display_errors", 1);
error_reporting(-1);

use Abbdinvasilyeva\MyLog;
use Abbdinvasilyeva\QuEquation;

require_once "core\EquationInterface.php";
require_once "core\LogAbstract.php";
require_once "core\LogInterface.php";
require_once "Abbdinvasilyeva\MyLog.php";
require_once "Abbdinvasilyeva\Equation.php";
require_once "Abbdinvasilyeva\QuEquation.php";

try {
    $b = new QuEquation();
    $x = $b->solve($va, $vb, $vc);
    $str = implode(", ", $x);
    MyLog::log($str);
} catch (Exception $e) {
    MyLog::log($e->getMessage());
}

MyLog::write();

?>