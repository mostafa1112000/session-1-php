
<?php
// basic fundmentals
// echo '<h1>welcome from php</h1>';
// echo print_r var_dump


// indexed array
// associative array
// $fname = ['num1' => 1 , 'num2' => 2 , 'num3' => 3];
// $grade = 60;
// if($is_male == true){
//     echo 'welcome male';
// }else if($is_male == false){
//     echo 'welcome female';
// }

// switch($grade){
//     case 100 : echo 'congrats';
//     break;
//     case 50 : echo "fair";
//     break;
//     default: echo 'not a valid grade';
// }

$names = [ 
    'ahmed',
     'mohamed', 
     'mahmoud', 
     'amr'
];

// for($i = 0; $i < 3 ; $i++){
//     echo $names[$i] ;
// }
// $i = 0;
// while($i < count($names)){
//     echo $names[$i] . '<br>';
//     $i++;
// }

// foreach($names as $k => $v ){
//     echo $v . '<br>';
// }


// foreach($names as $v){
//     echo $v . '<br>';
// }


// local scope
// global scope
// static variable

// $text = 'message';

// function sum($num1,$num2){
//     return $num1 + $num2;
// }
// function printText(){
//     global $text;
//     // echo $text;
//     $text = 'yasmin';
// }
// function incrementing(){
//     static $i =0;
//     $i++;
//     echo $i . '<br>';
// }

// echo $text;
// printText();
// print_r($fname);
// echo '<br>';



// scope          local
// life time      

// incrementing();
// incrementing();
// incrementing();
// incrementing();
// incrementing();


// const pi =3.14; 

// $var = "ahmed";
// $var = 5;

// $var = (int) $var;

// settype($var ,'integer');


if(isset($num1)){
    $num2 = $num1 + 10;
}

?>