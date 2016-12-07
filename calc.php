<html>
<head>
<title>calc.php</title>
</head>
<body>
<?php
//値を習得
if (isset($_POST["selOpe"])){
$a = $_POST['txtA'];
$b = $_POST['txtB'];
$ope = $_POST['selOpe'];

//セレクトボックスによって処理を変える
switch($ope){
	case "+":
	$answer = $a+$b;
		break;	
	case "-":
	$answer = $a-$b;
		break;
	case "×":
	$answer = $a*$b;
		break;
	case "÷":
	$answer = $a/$b;
		break;
		default;
		break;
}

//計算結果を表示
print($a."".$ope."".$b."=".$answer."\n");
}
?>

<br/>
<br/>
<a href="#" onclick="history.back(); return false;">前の画面に戻る</a>
</body>
</html>