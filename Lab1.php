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
if(!isset($_POST['massage'])) $_POST['massage'] = 'й';
echo('Значение текстового поля: ' . strlen(htmlspecialchars($_POST['massage'])));

?>


</body>
</html>