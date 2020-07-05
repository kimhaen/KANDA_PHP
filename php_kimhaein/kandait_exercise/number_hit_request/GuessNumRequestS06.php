<?php
/*
 * プログラム名：数字当てプログラムstep6
 * 作成者：キムへイン
 * 作成日：2020年5月22日
 */
//ユーザーから入力される数字
$userNum = $_POST["player_value"];

if (isset($_POST["random_value"])) {
    //正解数字
    $ansNum = $_POST["random_value"];
} else {
    $ansNum = mt_rand(0, 9);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<h1>数字当てプログラム</h1>
	<br>
	<form action="GuessNumRequestS06.php" method="POST">
		0から9までの数値を入力してください。：
		<input type="text" name="player_value"value=<?php echo $_POST["player_value"]?>>
			 <input type="hidden"name="random_value" value=<?php echo $ansNum?>>
			 <input type="submit"value="結果表示">
	</form>
<?php
//数字画面に表示
echo "予想数：{$userNum}<br>";
echo "正解数：{$ansNum}<br>";

//判断結果表示
if (isset($_POST["player_value"])) {

    if ($userNum < 0 || $userNum > 9) {

        echo "エラー！！0から9の数字ではありません<br>";

    } else if ($ansNum < $userNum) {

        echo $userNum, "より小さいです。<br>";

    } else if ($ansNum > $userNum) {

        echo $userNum, "より大きいです。<br>";

    } else if ($ansNum == $userNum) {

        echo "！！大当たり！！<br>";
    }
}

?><br>



</body>
</html>