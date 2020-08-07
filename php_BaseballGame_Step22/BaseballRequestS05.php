<?php

/*
 * プログラム名：野球ゲームプログラムstep5
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
<form action="BaseballRequestS05.php" method="post">
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

if($playerArray[0] != $playerArray[1] && $playerArray[0] != $playerArray[2]
    && $playerArray[1] != $$playerArray[2]){
        echo "⇒ユニークです。<br>\n";
}else{
    echo "⇒ユニークではありません。<br>\n";
}



?>
    </body>
</html>