<?php
/**
 * Created by IntelliJ IDEA.
 * User: tewapong
 * Date: 18/10/2559
 * Time: 9:33
 */

echo "hello world"."<br>";

$arr = ['a'=>1,'b'=>2,'c'=>3];

print_r($arr)."<br>";

echo $arr['b']."<br>";

foreach($arr as $k => $v){
    echo $v."<br>";
}

$arr1 = ['xxx','yyy','zzz'];

print_r($arr1);

echo $arr1[0]."<br>";

for($i = 0 ; $i <count($arr1); $i++){
    echo $arr1[$i]."<br>";
}
