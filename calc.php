<?php
$exp = $_GET["expression"];
//check if expression is empty
if($exp==""){
    echo "empty input!";
}else
if(preg_match('~^[0-9+\-*\/]+$~', $exp)){
    try {
        $p = eval('return '.$exp.';');
        echo $exp;
        echo "<br>";
        echo "the result is: ";
        echo $p;
    }catch (ParseError $e){
        echo "wrong way of writing expression <br>";
        echo "example of expression: 100 + 25*2";
    }

//    while(preg_match('~^[*\/]+$~', $exp)){
//        $divIndex = stripos($exp,"/");
//        $mulIndex = stripos($exp,"*");
//        if($divIndex<$mulIndex){
//
//        }
//    }
} else {
    echo "Bad Expression!";
}
echo "<br>";
?>
<a href="http://localhost:8000/">Go Back</a>