<?php

namespace morozov;

class Solve {

    public function solveOne($a, $b) {

        if ($a == 0) {

            return NULL;

        }

        MyLog::log("Уравенине линейное");
        return $this->x=array((-$b/$a));

    }

    protected $x;

}

?>