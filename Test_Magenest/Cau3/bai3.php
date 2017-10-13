<?php 

	print "Nhap vao so n:";
   	//fscanf(STDIN,"%d\n",$n);
	$n = 5;

	// Sum
	$sum = 0;
	if(is_int($n)){
		for($i = 0;$i < $n;$i++){
			if($i % 2 == 0){
				echo "Foo";
				$sum++;
			}else if($i % 3 == 0){
				echo "Bar";
				$sum++;
			}else if ($i % 5 == 0){
				echo "<br />";
			}
		}
		echo "Tong: ".$sum;
	}else{
		echo "Moi ban nhap lai!";
	}

	




 ?>