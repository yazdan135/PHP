<?php


$fruits = ["apple" , "mango", "orange", "pineapple"];
echo "<br> ".$fruits[1];

array_push($fruits , "hello");
// for each //
foreach($fruits as $key){
    echo "<br> $key";
}
//task

for($num=0; $num<=8; $num++){
   for($w=0; $w<=$num; $w++){
       for($q=0; $q<=$w; $q++){
        echo "*";
       }
   }
   echo"<br>";
}

//associate array
$employ= [
    "hennry" => "web dev",
    "peter" => "app dev",
    "rossy" => "SQA"
];
foreach($employ as $key => $value){
    echo"<br> $key ; $value";
}


?>