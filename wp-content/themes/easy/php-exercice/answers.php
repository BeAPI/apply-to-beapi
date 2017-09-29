<?php
/**
 * display
 *
 */
$greetings ="hi";
$nums = 0644050934;
$special = "special chars ! ok<<<b> is not  bold</b>";
echo $greetings;


echo 'well  is my number'. $nums;
echo htmlspecialchars($special);
if($greetings =="hi"){
	echo "hey what's up <br>";
}else{
	echo "we say hello first :/ <br>";
}

$concatentation = 'let\'s reforumulate we say ' . $hi . 'then we give our number"' . $nums . '", and if you want, we add some special chars like these : ' . $special;
echo $concatentation;

/**********************************************************
 * Loops
 ***************************************************************/
echo "<br>while loop : <br>";
$i = 1;
while ($i <= 10) {
	echo "$i<br>";
	$i++;
}
echo "for loop : ";
for ($i=1; $i <=10; $i++) {
	echo "$i<br>";
	$i++;
}
echo "wrapping the while loop : <br>";
function while_wrapper1()
{
	$i = 1;
	while ($i <= 10) {
		echo "$i<br>";
		$i++;
	}
}
while_wrapper1();

/**
 * displays numbers
 *
 * @author Romain DORR
 *
 * @param  integer $max the max number
 *
 * @return void
 */
function while_wrapper($max = 10)
{
	$i = 1;
	while ($i <= $max) {
		echo "$i<br>";
		$i++;
	}
}
while_wrapper(20);

/**********************************************************
 * Arrays
 ***************************************************************/
$tableau = array(5, 12, 10, 21, 2, 6, 8, 20, 14, 9, 12);
$gt_counter = 0;
echo "<br>display all elements<br>";
foreach ($tableau as $key => $value) {
	echo $value.'<br>';
	//numbers > 10
	if($value >=10){
		$gt_counter++;
	}
	// if 20 exist

}
function get_average($tableau)
{
	$sum = 0;
	foreach ($tableau as $key => $value) {
		$sum += $value;
	}
	return $sum/count($tableau);

}
$average = get_average($tableau);
echo $average;


foreach ($tableau as $key => $value) {
	if($value >=10){
		$co++;
	}
}
echo "there are $gt_counter numbers which are greater than 10<br>";

echo (in_array(20, $tableau) ? "il existe :D ": "le 20 n'existe pas<br>");
echo max($tableau);
