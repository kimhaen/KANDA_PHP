<?php

/*
 * プログラム名：野球ゲームプログラムstep3
 * 作成者：キムへイン
 * 作成日：2020年5月19日
 */

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>
<h1>野球ゲームプログラム</h1>

3桁の数字を入力してください：
<form action="BaseballRequestS03.php" method="post">
<input type="text" name="player_3digit_value"  value=<?php echo $_POST["player_3digit_value"];?>>
<br>
<input type="submit" name="結果表示">
</form>


入力値：
<?php
echo "{$_POST['player_3digit_value']}<br>";

if (!preg_match("/^[0-9]{3}$/",$_POST["player_3digit_value"])){
    echo "⇒エラー！！3桁の数字ではありません。<br>\n";
}



?>
    </body>
</html>