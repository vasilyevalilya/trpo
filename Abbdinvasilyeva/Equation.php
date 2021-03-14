<?php

namespace Abbdinvasilyeva;

Class Equation
{
    public function li_solve($a, $b)
    {

        if ($a == 0) {
            throw new Exception("ошибка: уравнения не существует.");
        }
        return $this->X = array(-($b / $a));
    }

    protected $X;
}

?>