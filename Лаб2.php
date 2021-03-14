<?php

class A
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

class B extends A
{
	protected function dis($a, $b, $c){
		return ($b**2)-4*$a*$c;
		}
	
	public function solve($a, $b, $c){

		$x = $this->dis($a, $b, $c);

	    if($a == 0){
	        return $this->li_solve($b,$c);
	    }

		if ($x > 0){
		    return $this->X=array(
		        (-$b+sqrt($x))/(2*$a),
                (-$b-sqrt($x))/(2*$a)
		        );
		}
		
		if($x == 0){
			return $this->X=array(-($b/(2*$a)));
		}

		throw new Exception("ошибка: уравнение не имеет корней.");
		
	}
	
}

$equation1 = new A();
$equation2 = new B();
echo $equation1->li_solve(5, 6) . "\n";
var_dump($equation2->solve(4.5, 12, 4));
echo $equation2->solve(0, 4, 7) . "\n";