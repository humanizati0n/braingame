<?php

namespace morozov;

use core\EquationInterface;

class SolveTwo extends Solve implements EquationInterface {

protected function discriminant($a, $b, $c) {

    $gg = ($b**2)-4*$a*$c;

    return $gg;

}

    /**
     * @param $a
     * @param $b
     * @param $c
     * @return array|null
     */

    public function  solve($a, $b, $c) {

    if ($a == 0) {

        return $this->solveOne($b, $c);

    }

    $x = $this->discriminant($a, $b, $c);

    MyLog::log("Квадратное уравнение");

    if ($x > 0) {

        return $this->X=array(

            -($b+sqrt($b**2-4*$a*$c))/(2*$a),
            -($b-sqrt($b**2-4*$a*$c))/(2*$a)

        );

        }

    if ($x == 0) {

        return $this->X=array(-$b/2*$a);

    }

    return null;

    }

}

