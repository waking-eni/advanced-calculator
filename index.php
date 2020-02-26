<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<body>

<div>
	<form action="calculate.php" method="post">
		<input type="text" class='form-control' name="num1" placeholder="Enter number 1"><br>
		<input type="text" class='form-control' name="num2" placeholder="Enter number 2"><br>
		<button class='btn btn-primary' type="submit" name="add">Add</button>
		<button class='btn btn-primary' type="submit" name="sub">Sub</button>
		<button class='btn btn-primary' type="submit" name="mul">Mul</button>
		<button class='btn btn-primary' type="submit" name="div">Div</button>	
		<button class='btn btn-primary' type="submit" name="mod">Mod</button>	
		<button class='btn btn-primary' type="submit" name="square-root">Sqrt()</button>	
		<button class='btn btn-primary' type="submit" name="sin">Sin()</button>	
		<button class='btn btn-primary' type="submit" name="sinh">Sinh()</button>
		<button class='btn btn-primary' type="submit" name="cos">Cos()</button>	
		<button class='btn btn-primary' type="submit" name="cosh">Cosh()</button>
		<button class='btn btn-primary' type="submit" name="tan">Tan()</button>	
		<button class='btn btn-primary' type="submit" name="tanh">Tanh()</button>
		<button class='btn btn-primary' type="submit" name="log">Log()</button>
		<button class='btn btn-primary' type="submit" name="log10">Log10()</button>
		<button class='btn btn-primary' type="submit" name="exp">Exp()</button>
		<button class='btn btn-primary' type="submit" name="pow">Pow()</button>
		<button class='btn btn-primary' type="submit" name="decbin">Decbin()</button>
		<button class='btn btn-primary' type="submit" name="dechex">Dechex()</button>
		<button class='btn btn-primary' type="submit" name="decoct">Decoct()</button>
		<button class='btn btn-primary' type="submit" name="hexdec">Hexdec()</button>
		<button class='btn btn-primary' type="submit" name="octdec">Octdec()</button>
	</form>
</div>

<textarea id="outputt" rows="1" cols="10"></textarea>

<script type="text/javascript">
	var url = window.location.search;
	var res = url.slice(8);
	document.getElementById("outputt").innerHTML= res;
	
</script>

</body>
</html>
