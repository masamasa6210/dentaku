<html>
<head>
<title>calc.php</title>
</head>
<body>
<?php

if (isset($_POST["selOpe"])){
	$num1 = $_POST['txtA'];
	$num2 = $_POST['txtB'];
	$ope  =  $_POST['selOpe'];

	if(preg_match('|^-?\d+(\.\d+)?$|', $num1) && preg_match('|^-?\d+(\.\d+)?$|', $num2)){   //数字かどうかを判別する(マイナス,小数点含む)

	switch($ope){
		case "+":
		$answer = $num1 + $num2;
			break;	
		case "-":
		$answer = $num1 - $num2;
			break;
		case "×":
		$answer = $num1 * $num2;
			break;
		case "÷":
			
			if($_POST['txtB'] == 0 and $_POST['selOpe'] == "÷"){//0で割り算をできないようにする
	                  $answer = null;
	                  echo '0以外の数字を入れてください';
	                  echo '<br>';
	                  echo '<a href="#" onclick="history.back(); return false;">前の画面に戻る</a>';
	                  exit;
			}else{
				$answer = $num1 / $num2;
		}
			break;
			default;
			break;
	}

 		print($num1." ".$ope." ".$num2." = ".$answer."\n");　//""で空白を入れる
 	}else{
 		print "値を入れてください";
 	}
}
?>

<br/>
<br/>
<a href="#" onclick="history.back(); return false;">前の画面に戻る</a>
</body>
</html>