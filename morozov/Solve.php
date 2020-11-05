<?php

namespace morozov;

class Solve {

    public function solveOne($a, $b) {

        if ($a == 0) {

            throw  new MorozovException("Уравнения не существует.");

        }

        MyLog::log("Уравенине линейное");
        return $this->x=array((-$b/$a));

    }

    protected $x;

}

?>