<?php

class A{

}

class B extends A{

	protected $a;

	public function __construct($a){
	$this->a = $a;
	}
}

class C extends B{

	protected $b;
	protected $c;

	public function __construct($a, $b, $c){
	parent::__construct($a);
	$this->b = $b;
	$this->c = $c;	
	}
}

$a1 = new A();
$a2 = new A();
$b3 = new B();
$b4 = new B();
$c5 = new C();

?>
