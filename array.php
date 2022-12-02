<?php
/*
looping: 
Arrays:



*/
// $counter=0;
// while($counter<=10)
// {
//     if($counter%2==1)
//     {
//         echo $counter."<br>";

//     }
   
//     $counter++;
// }
// for($counter=0;$counter<=10;$counter++)
// {
//     echo $counter."<br>";
// }

// $counter=0;
// do{
    if($counter%2==0)

//     echo $counter."<br>";
//     $counter++;
// }while($counter<=10);

//for each loop 
//Array elements - 
// $arr = [1,2,3,4,5,6,7,8,9];
// $arr = array(1,2,3,4,5,6,7,8,9);
// foreach($arr as $i)
// {
//     echo $i."<br>";
// }
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        break;
    }
    echo $key . ' ' . $value . '<br>';
}
// $arr = [1,2,3,4,5,6,7,8,9];
// for($counter=0;$counter<9;$counter++)
// {
//     echo $arr[$counter]."<br>";

// }
?>