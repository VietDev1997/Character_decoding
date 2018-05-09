<?php
function cipher26($message) {
	$result = "";
	$before = 0;
	$after = 0;
	$vt = 0;
	for ($i = 0; $i < strlen($message); $i++) {
		$vt = (ord($message[$i]) - 97); // lấy về vị trí của kí tự
		$after = $vt - $before;
		if ($after < 0) {
			$after += 26;
		}
		$result .= chr($after + 97); //chuyển mã ASCII thành kí tự
		$before = $vt;
	}
	return $result;
}
$a = 'taiaiaertkixquxjnfxxdh';
cipher26($a);
