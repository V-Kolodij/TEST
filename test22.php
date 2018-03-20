<?php
header("Content-type: text/html; charset=utf-8");
//test count max element
$mass = array(5,3,7,4,9,22,12,5,6,3);
$k=0;
for ($i=0; $i<10; $i++){
	if ($mass[$i]>$mass[$i-1] && $mass[$i]>$mass[$i+1] ){
		echo $mass[$i]."<br>";
		$k+=1;
	}
}
echo "Таких елементів $k<br>";
?>