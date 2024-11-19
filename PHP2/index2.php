<?php

$score=85;

if(($score >=90)&&($score<=100) ){
    echo"The value of your $score is A!";
}elseif(($score >=80)&&($score<=89)){
    echo "the value of score $score is B!";
}elseif(($score >=70)&&($score<=79)){
    echo "the value of score $score is C!";
}elseif(($score >=60)&&($score<=69)){
    echo "the value of score $score is D!";
}else{
    echo "the value of your score $score is F";
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