<?
	function Check($string){
			
				$check1 = substr($string, 0, 7);/*http://*/
				
				$check2 = substr($string, 0, 8);/*https://*/
				
				if ($check1 == 'http://' || $check2 == 'https://') {
					return $result = $string . " Да<br/>";
				} else {
					return $result = $string . " Нет<br/>";
				}

	};
	$array = array("http://google.com.ua", "http://yandex.ru", "https://yahoo.com", "www.vk.com");
	foreach ($array as $key => $value) {
		echo Check($value);

	};	
	



?>