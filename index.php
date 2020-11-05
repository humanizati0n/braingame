<?php

class A {

    public function solve($a, $b) {

        if ($a == 0) {

            return null;

        }

        return $this->x=(-$b/$a); 

    }

    protected $x;

}

class B extends A {

    protected function discriminant($a, $b, $c) {

        $gg = ($b**2)-4*$a*$c;

        return $gg;

    }

    public function  solve_two($a, $b, $c) {

        if ($a == 0) {

            return $this->solve($b, $c);

        }

        $x = $this->discriminant($a, $b, $c);

        if ($x > 0) {

            return $this->X=array(

                -($b+sqrt($b**2-4*$a*$c)/2*$a),
                -($b-sqrt($b**2-4*$a*$c)/2*$a)

            );

            }

        if ($x == 0) {

            return $this->X=array(-$b/2*$a);

        }
        
        return $this->X=null;

        }

    }

    $a = new A();
    $a->solve(22, 33);


    