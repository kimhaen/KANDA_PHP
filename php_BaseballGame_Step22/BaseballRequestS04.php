<?php

/*
 * プログラム名：野球ゲームプログラムstep4
 * 作成者：キムへイン
 * 作成日：2020年5月22日
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
<form action="BaseballRequestS04.php" method="post">
<input type="text" name="player_3digit_value"  value=<?php echo $_POST["player_3digit_value"];?>>
<br>
<input type="submit" name="結果表示">
</form>


入力値：
<?php
$playerArray=array();

echo "{$_POST['player_3digit_value']}<br>";

if (!preg_match("/^[0-9]{3}$/",$_POST["player_3digit_value"])){

    echo "⇒エラー！！3桁の数字ではありません。<br>";

}else{
    $playerArray[0] = substr($_POST["player_3digit_value"],0,1);
    $playerArray[1] = substr($_POST["player_3digit_value"],1,1);
    $playerArray[2] = substr($_POST["player_3digit_value"],2,1);
}

echo "配列要素[0]の数字：",$playerArray[0],"<br>";
echo "配列要素[1]の数字：",$playerArray[1],"<br>";
echo "配列要素[2]の数字：",$playerArray[2],"<br>";




?>
    </body>
</html>