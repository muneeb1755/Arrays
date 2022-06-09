<!DOCTYPE html>
<html>
<body>
<?php
//Question 1
echo "Question 1";
echo "<br>";
$cars = array('honda', 'toyota', 'suzuki', 'kia', 'audi', 'bmw');
foreach($cars as $value){
    echo "$value ,";
}
echo "<br>";
$cars1=$cars;
sort($cars1);
foreach($cars1 as $value){
    echo "$value ,";
}
echo"<br>";
echo "Deleting from Array<br>";
$abc = array_search("suzuki", $cars1);
if($abc){
unset ($cars1[$abc]);
}else{
    echo "<br> Iem is not present in an array <br>";
}
sort($cars1);
foreach($cars1 as $value){
    echo "$value , " ;
}
echo "<br>";
echo "First Element from the array is : <br>";
echo "Expected Result: $cars[0]";
echo "<br>";
echo "Slice Technique for displaying first element: ";
echo array_slice($cars, 0, 1)[0];
echo "<br>";
echo "Orignal Array is : ";
foreach($cars1 as $value){
    echo "$value ,";
}
sort($cars);
echo "<br>";
echo "Expected Array is : ";
echo "<br>";
array_splice( $cars, 3, 0, 'mazda' ); 
foreach($cars as $value){
    echo "$value ,";
}

//Question 2
echo "<br>";
echo "Question 2 ,";
echo "<br>";
$q2= array("Ahmed"=>"55000","Rida"=>"41000","hanif"=>"93000","Rimsha"=>"20000");
asort($q2);
print_r($q2);
echo "<br>";
ksort($q2);
print_r($q2);
//Question 3
echo "<br>";
echo "Question 3";
echo "<br>";
$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$a= count($temp);
echo "Total Number".$a;
echo "<br>";
$b= array_sum($temp);
echo "Sum of Numbers".$b;
echo "<br>";
$c= ($b) / ($a);
echo "Avarge of given array is ". $c;
$s= sort($temp);
echo "<br>";
echo "Five lowest Temperatures are ";
for ($x = 0; $x <= 5; $x++) {
    echo $temp[$x]. ", ";
}
//$r= array_slice($temp, -5);
echo "<br>";
echo "Five Highest Temperatures are ";
$r= array_slice($temp,-5);
foreach($r as $value){
echo $value. ",";
}
//Question 4
echo "<br>";
echo "Question 4";
echo "<br>";
$dup= array(55, 26, 59, 89, 59, 86, 26, 26, 49, 59, 86);
echo "Orignal Array is: ";
foreach($dup as $value){
    echo "$value ,";
}
echo "<br>";
$dup = array_unique($dup); 
echo "Array after removing duplication: ";
foreach($dup as $value){
    echo "$value ,";
}
//Question 5
echo "<br>";
echo "Question 5";
echo "<br>";
$abcd=array('abc', '55', '78', 'de', 're', 'ef', '15');
if(is_string($abcd)){
echo "All values are Strings";
}else {
    echo "All values are not Strings";
}  
?>
</body>
</html>
