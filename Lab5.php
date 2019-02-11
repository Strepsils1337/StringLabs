<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Головна сторінка</title>
    <link href="./style/style.css" rel="stylesheet" type="text/css">
</head>
<body>




<form method="post">
 <p><textarea rows="10" cols="45" type="text" name="massage" id="massage-field"></textarea></p>
 <p><input type="submit" /></p>
</form>
<?	
	echo "Вариант 1 substr_replace"."<br/>";
	$arr = explode(" ", $_POST['massage']);
	$new_arr = array();
	//$arr = array($_POST['massage']);
	foreach ($arr as $key => $value) {
		
		// $value = preg_replace('#[^A-Z]+#', '', $value);
		$len = strlen($value);
		// var_dump($value);
		// var_dump($len);
		//echo $len."<br/>";
		if ($len>5) {
			// echo $len."<br/>";
			 // var_dump($len);
			//$value = strtr($value," ","");
			$value = substr_replace($value,'*',5);
			//echo $value."<br/>";
		};
		$new_arr[] = $value;

	}
	//var_dump($arr);
	$str = implode(" ", $new_arr);
	//$str = strtr($str," ","_");
	echo $str."<br/>";
	echo "Варинт 2:"."<br/>";
	$arr = explode(" ", $_POST['massage']);
	$new_arr = array();
	//$arr = array($_POST['massage']);
	foreach ($arr as $key => $value) {
		
		// $value = preg_replace('#[^A-Z]+#', '', $value);
		$len = strlen($value);
		// var_dump($value);
		// var_dump($len);
		//echo $len."<br/>";
		if ($len>5) {
			 //echo $len."<br/>";
			 // var_dump($len);
			//$value = strtr($value," ","");
			$a = $len -5;
			$value = preg_replace('|.{'.$a.'}$|si', '*', $value);
			//echo $value."<br/>";
		};
		$new_arr[] = $value;

	}				
	$str = implode(" ", $new_arr);
	//$str = strtr($str," ","_");
	//echo (preg_replace('/\b(\S{5,})\b/', '*', $_POST['massage']));
	echo $str."<br/>";

?>


</body>
</html>