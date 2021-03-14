<?php

namespace Abbdinvasilyeva;

Class Equation
{
    public function li_solve($a, $b)
    {

        if ($a == 0) {
            throw new AbbdinvasilyevaException("ошибка: уравнения не существует.");
        }
        MyLog::log("определено, что это линейное уравнение");
        return $this->X = array(-($b / $a));
    }

    protected $X;
}

?>