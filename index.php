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
		<button type="submit" name="add">Add</button>
		<button type="submit" name="sub">Sub</button>
		<button type="submit" name="mul">Mul</button>
		<button type="submit" name="div">Div</button>	
		<button type="submit" name="mod">Mod</button>	
		<button type="submit" name="square-root">Sqrt()</button>	
		<button type="submit" name="sin">Sin()</button>	
		<button type="submit" name="sinh">Sinh()</button>
		<button type="submit" name="cos">Cos()</button>	
		<button type="submit" name="cosh">Cosh()</button>
		<button type="submit" name="tan">Tan()</button>	
		<button type="submit" name="tanh">Tanh()</button>
		<button type="submit" name="log">Log()</button>
		<button type="submit" name="log10">Log10()</button>
		<button type="submit" name="exp">Exp()</button>
		<button type="submit" name="pow">Pow()</button>
		<button type="submit" name="decbin">Decbin()</button>
		<button type="submit" name="dechex">Dechex()</button>
		<button type="submit" name="decoct">Decoct()</button>
		<button type="submit" name="hexdec">Hexdec()</button>
		<button type="submit" name="octdec">Octdec()</button>
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
