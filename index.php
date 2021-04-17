<?php

ini_set("display_errors", 1);
error_reporting(-1);

require __DIR__.'/vendor/autoload.php';
$equation = new mdk0203\QuEquationTest();


try {
    Abbdinvasilyeva\MyLog::log("Version: " . trim(file_get_contents("version")) . "\n");
    $b = new QuEquation();
    $values = array();

    for ($i = 1; $i < 4; $i++) {
        echo "Введите  " . $i . "аргумент: ";
        $values[] = readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Введено уравнение " . $va . "x^2 + " . $vb . "x + " . $vc . " = 0 \n\r");
    $x = $b->solve($va, $vb, $vc);

    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: " . $str);
} catch (abbdinvasilyevaException $e) {
    MyLog::log($e->getMessage());
}

MyLog::write();

?>
