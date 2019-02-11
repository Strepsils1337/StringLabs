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
	
	
	// $arr = explode("\n", $_POST['massage']);

	// //$arr = array($_POST['massage']);
	// foreach ($arr as $key => $value) {
		
	// 	echo /*$i*/ $key." " . (mb_ucfirst(mb_strtolower($value))) . "<br/>";
	
	// }
	//echo('Значение текстового поля: ' .ucwords(mb_strtolower(htmlspecialchars($_POST['massage']))));
	function mb_ucfirst($string, $enc = 'UTF-8'){
				  return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) . 
				         mb_substr($string, 1, mb_strlen($string, $enc), $enc);
 	};

 	$arr = explode("\n", $_POST['massage']);
 	foreach ($arr as $key => $value) {
 		$v = mb_ucfirst($value);
 		echo /*$i*/ $key." " . (mb_ucfirst(mb_strtolower($v))) . "<br/>";
 	}	
?>


</body>
</html>