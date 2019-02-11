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
	//$i = 0;
	$arr = explode("\n", $_POST['massage']);

	//$arr = array($_POST['massage']);
	foreach ($arr as $key => $value) {

		echo /*$i*/ $key." " . (ucfirst(mb_strtolower($value))) . "<br/>";
		//$i +=1;
	}
	//echo('Значение текстового поля: ' .ucwords(mb_strtolower(htmlspecialchars($_POST['massage']))));

?>


</body>
</html>