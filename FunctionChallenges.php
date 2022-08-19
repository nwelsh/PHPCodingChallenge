<!-- Write a function that returns the string "something" joined with a space " " and the given argument a. -->

function giveMeSomething($a) {
	return "something " . $a;
}


<!-- Return the Remainder from Two Numbers  -->

function remainder($x, $y) {
	return $x % $y;
}

<!-- Create a function that finds the maximum range of a triangle's third edge, where the side lengths are all integers. -->
function nextEdge($side1, $side2) {
	return ($side1 + $side2) - 1;
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

<!-- Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array. If Bob is not in the array, return -1. -->
function findBob($names) {
	$it = 0;
	foreach($names as $name){
		// name is bob 
		if(strcmp($name, "Bob") == 0) {
			return $it;
		}
		$it++;
	}
	return -1;
}

<!-- sorting : https://www.w3schools.com/php/php_arrays_sort.asp -->
<!-- Create a function that takes a list of numbers and returns the second largest number. -->
function secondLargest($a) {
	return rsort($a);
}

<!-- fix the code to return all the upper case letters -->
function countUppercase($arr) {
 $sum = 0;
 for ($x = 0; $x < $arr; $x++) {
  $item = $arr[$x];
	 for ($y =0; $y < strlen($item); $y++){
		 if(ctype_upper($y)){
		    $sum++;
			}
	 }
 }
 return $sum;
}

<!-- Given a number, return an array containing the two halves of the number. If the number is odd, make the rightmost number higher. -->
function numberSplit($n) {
	if($n % 2 == 0){
		$arr = [$n/2, $n/2];
	} else {
		$arr = [floor($n/2), ceil($n/2)];
	}
	return $arr;
}

<!-- Given an array of prices prices and a "supposed" total t, return true if there is a hidden fee added to the total (i.e. the total is greater than the sum of prices), otherwise return false. -->
function hasHiddenFee($prices, $t) {
	$counter = 0;
 	foreach ($prices as $x){
		$counter += $x;
	}
	if($counter > $t){
		return true;
	} else{
		return false;
	}
}

