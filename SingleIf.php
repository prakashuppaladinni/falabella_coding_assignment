<?php
for($i=1;$i<=100;$i++){
	$three_and_five = 3*5; // Both the numbers '3' and '5' are prime number, so we can multiply the numbers (i.e. 3*5=15)
	$arr = array($three_and_five=>'Linianos',5=>'IT',3=>'Linio');
	foreach($arr as $key=>$val){
		if($i%$key==0){
			echo $val."<br>";
			continue 2;
		}
	}
	echo $i."<br>";
}