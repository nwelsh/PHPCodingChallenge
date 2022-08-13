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