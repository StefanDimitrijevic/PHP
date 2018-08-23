<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Simple Calculator</title>
<link rel="stylesheet" type="text/css" href="style.php"/>
</head>

<body>
	<div class="container">
	<h1>Simple Calculator</h1>
	
	<div class="calc">
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<input type="number" name="val1" required /><br>
		<div class="buttons">
		<button class="but" type="submit" name="operator" value="add">+</button>
		<button class="but" type="submit" name="operator" value="sub">-</button>
		<button class="but" type="submit" name="operator" value="mul">*</button>
		<button class="but" type="submit" name="operator" value="div">/</button><br>
		</div>
		<input type="number" name="val2" required /><br>
	</form>
	</div>

<?php
//	$v1 = $_GET['val1'];
//	$v2 = $_GET['val2'];
	$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die('');
	$v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_INT) or die('');
	$op = $_GET['operator'];
	switch($op){
		case 'add':
			$res = $v1+$v2;
			$opchar = '+';
			break;
		case 'sub':
			$res = $v1-$v2;
			$opchar = '-';
			break;
		case 'mul':
			$res = $v1*$v2;
			$opchar = '*';
			break;
		case 'div':
			$res = $v1/$v2;
			$opchar = '/';
			break;
		default:
			$res = 'Unknown operator "'.$op.'"';
			$opchar = $op;
	}
	echo $v1.' '.$opchar.' '.$v2.' = '.$res;	  
?>
	</div>
	
</body>
</html>