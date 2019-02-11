<?
	
	$array = array("http://google.com.ua", "http://yandex.ru", "https://yahoo.com", "vk.com");
	
	foreach ($array as $key => $value) {
		
		$check1 = substr($value, 0, 7);
		// echo $check1."<br/>";
		$check2 = substr($value, 0, 8);
		// echo $check2."<br/>";
		if ($check1 == 'http://' or $check2 == 'https://') {
			echo "Да<br/>";
		} else {
			echo "Нет<br/>";
		}
	};
?>