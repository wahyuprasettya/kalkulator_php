<!DOCTYPE html>
<html>
<head>
	<title>kalkulator</title>
</head>
<style>
</style>

<body class="body">
<fieldset>
<form method="post" action="">
<label>Angka pertama</label><br>
 <input type="text" name="angka1"><br>
 <label>Angka kedua</label><br>
 <input type="text" name="angka2"><br>
<button type="submit" name="+">+</button>
<button type="submit" name="-">-</button>
<button type="submit" name="*">*</button>
<button type="submit" name="/">:</button>
 </form>
 </fieldset>
</body>
</html>


<?php 

if (isset($_POST ["+"])){

	$angka1 = $_POST ["angka1"];
	$angka2 = $_POST ["angka2"];

echo "<fieldset>";
	echo "hasil nya adalah = "; echo tambah($angka1,$angka2);
echo "</fieldset>";
}
elseif (isset($_POST ["-"])){

	$angka1 = $_POST ["angka1"];
	$angka2 = $_POST ["angka2"];

echo "<fieldset>";
	echo "hasil nya adalah = "; echo kurang($angka1,$angka2);
echo "</fieldset>";
}elseif (isset($_POST ["*"])){

	$angka1 = $_POST ["angka1"];
	$angka2 = $_POST ["angka2"];

	echo "<fieldset>";
	echo "hasil nya adalah = "; echo kali($angka1,$angka2);
echo "</fieldset>";
}elseif (isset($_POST ["/"])){

	$angka1 = $_POST ["angka1"];
	$angka2 = $_POST ["angka2"];

	echo "<fieldset>";
	echo "hasil nya adalah = "; echo bagi($angka1,$angka2);
echo "</fieldset>";
} else
{
	echo "pilih operasi yang benar!";
}







function tambah($a,$b){
	$hasil = $a + $b;

	return $hasil;

}
function kurang($a,$b){
	$hasil = $a - $b;
	return $hasil;

}
function kali($a,$b){
	$hasil = $a * $b;
	return $hasil;

}
function bagi($a,$b){
	$hasil = $a / $b;
	return $hasil;

}





?>


 