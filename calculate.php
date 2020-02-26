<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$result = null;

	If(empty($num1) || empty($num2)) {
		header("Location: index.php?error=emptyfields&num1=".$num1."&num2=".$num2);
		exit();
	}
	else if(!is_numeric($num1) && !is_numeric($num2)) {
		header("Location: ../signup.php?error=invalidinput");
		exit();
	}
	else if(!is_numeric($num1)) {
		header("Location: ../signup.php?error=invalidinput&num2=".$num2);
		exit();
	}
	else if(!is_numeric($num2)) {
		header("Location: ../signup.php?error=invalidinput&num1=".$num1);
		exit();
	}
	else if(isset($_REQUEST['add'])){
		$result = $num1+$num2;
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['sub'])){
		$result = $num1-$num2;
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['mul'])){
		$result = $num1*$num2;
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['div'])){
		$result = $num1/$num2;
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['mod'])){
		$result = $num1%$num2;
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['square-root'])){
		$result = sqrt($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['sin'])){
		$result = sin($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['sinh'])){
		$result = sinh($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['cos'])){
		$result = cos($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['cosh'])){
		$result = cosh($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['tan'])){
		$result = tan($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['tanh'])){
		$result = tanh($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['log'])){
		$result = log($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['log10'])){
		$result = log10($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['exp'])){;
		$result = exp($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['pow'])){
		$result = pow($num1,$num2);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['decbin'])){
		$result = decbin($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['dechex'])){
		$result = dechex($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['decoct'])){
		$result = decoct($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['hexdec'])){
		$result = hexdec($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else if(isset($_REQUEST['octdec'])){
		$result = octdec($num1);
		header("Location: index.php?result=".$result);
		exit();
	}
	else {
		header("Location: index.php");
		exit();
	}

?>
