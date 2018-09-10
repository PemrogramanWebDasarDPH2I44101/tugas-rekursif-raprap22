<?php 
function bintang($w, $x){

	if ($w > 0) {
		if ($x > 0) {
			echo "* ";
			$x--;
			bintang($w, $x);
		}
		else{
			echo "<br>";
			$w--;
			bintang($w, $w);
		}
	}
}
bintang (5, 5);

echo "--------------------------------------- <br><br>";


function angka($w, $x){

	if ($w <= 5) {
		if ($x <= $w) {
			echo "$x ";
			$x++;
			angka($w, $x, 5);
		}
		else{
			echo "<br>";
			$w++;
			angka($w, 1, 5);
		}
	}
}
angka (1, 1, 5);
 ?>
