<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Головна сторінка</title>
    <link href="./style/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?
// Сделаю 2-мя способами:
// 1)переведу текст в массив,переберу все элементы,заменю все слова с длиной 1 в верх.регистр,сплитну обратно в целую строку,и в готовой строке заменю пробелы на _
// 2)сделаю просто замену пробелы на _
?>



<form method="post">
 <p><textarea rows="10" cols="45" type="text" name="massage" id="massage-field"></textarea></p>
 <p><input type="submit" /></p>
</form>
<?	
		
	$arr = explode(" ", $_POST['massage']);
	$new_arr = array();
	//$arr = array($_POST['massage']);
	foreach ($arr as $key => $value) {
		$len = mb_strlen($value);
		//echo $len."<br/>";
		if ($len==1) {
			//echo $len."<br/>";
			$value = mb_strtoupper($value);
			//echo $value."<br/>";
		};
		$new_arr[] = $value;

	}
	//var_dump($arr);
	$str = implode(" ", $new_arr);
	$str = strtr($str," ","_");
	echo $str."<br/>";
	

?>


</body>
</html>