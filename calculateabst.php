	
	<?php
abstract class Calculator {
    abstract public function add($a, $b);
}
class MathOperations extends Calculator {
    public function add($a, $b) {
        return $a + $b;
    }
}
$math = new MathOperations();
$num1 = 10;
$num2 = 20;
$result = $math->add($num1, $num2);

echo "The sum of $num1 and $num2 is: $result";
?>
