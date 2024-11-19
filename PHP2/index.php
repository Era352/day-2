<?php
//if statement, if elseif statement, if....elseif...else..statement, switch statement

//if statement
$num= 1; 

if($num<0){
    echo "$num is less than 0 <br>";
}

//if...else
$age=13;

if($age > 18){
    echo "you are an adult <br>";
}else{
    echo "you are underage <br>";
}

if(($age > 12) && ($age<20)){
    echo "Discount for you!!! <br>";
}

//if...elseif...else
if($num < 0){
    echo"the value of $num is a negative number.";
}elseif($num==0){
    echo"the value of $num is 0.";
}else{
    echo "the value $num is a positive";
}

$grade = 'B' ;
switch($grade){
    case 'A':
        echo 'execellent, you got an A!';
         break;
        case 'B':
            echo 'Good Job, you got a D'
         break;
        case 'C':
            echo 'Well done you got a C'
         break;
        case 'D':
            echo "You passed, butnyou need to study more"
         break;
        case 'F':
            echo 'You failed'
         break;
        default;
        echo 'Invalid Grade'
         break;
}
?>
