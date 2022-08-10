<!-- Write a function that returns the string "something" joined with a space " " and the given argument a. -->

function giveMeSomething($a) {
	return "something " . $a;
}


<!-- Return the Remainder from Two Numbers  -->

function remainder($x, $y) {
	return $x % $y;
}

<!-- Given two unique integer arrays $a and $b, and an integer target value $v, create a function to determine whether there is a pair of numbers that add up to the target value $v, where one number comes from one array $a and the other comes from the second array $b. -->
function sumOfTwo($a, $b, $v) {
	// a = arr1 b = arr2 v = target 
	foreach ($a as $x){
		foreach ($b as $y){
			if($x + $y == $v){
				return true;
			}
		}
	}
	return false;
}