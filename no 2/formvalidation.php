<?php
function formVadilation($password){
	$minVal = strlen($password) == 8;
	$kapVal = preg_match('/[A-Z]/', $password);
	$lowVal = preg_match('/[a-z]/', $password);
	$specVal = preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password);
	
	if ($minVal && $kapVal && $lowVal && $specVal) {
		echo "password ok";
	}else{
		echo "password harus minimal berjumlah 8 karakter dan harus mengandung huruf besar huruf kecil dan karakter spesial spesial";
	}
}

$pass1 = "sfADS!@#";
formVadilation($pass1);
?>
