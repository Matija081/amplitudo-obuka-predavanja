<?php 

//string
$firstText = 'Ovo je tip string - text';

//numbers
$firstNumber = 10;

//float
$firstFloat = 10.34;

//boolean
$firstBoolean = true; //false

//standard array
$firstStandardArray = ['String', 1, 1.34, ['first', 'second']];

// print_r($firstStandardArray);
// echo '<br>';
// echo $firstStandardArray[2];

$firstAssocArray = [
    'name' => 'Marko',
    'surname' => 'Markovic',
    'age' => 18
];

// print_r($firstAssocArray);

$firstLoopArray = [1,2,3,4,5];

//prolazak kroz niz
// for($i = 0; $i < count($firstLoopArray); $i++){
//     echo $firstLoopArray[$i] . '<br>'; 
// }

$firstIfNumber = 12;
$secondIfNumber = 12;
if($firstIfNumber > $secondIfNumber){
    echo 'vece';
}else if($firstIfNumber < $secondIfNumber){
    echo 'manje';
}else{
    echo 'jednako';
}