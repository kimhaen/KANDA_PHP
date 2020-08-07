<?php

/*
 * プログラム名：野球ゲームプログラムstep7
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
<form action="BaseballRequestS07.php" method="post">
<input type="text" name="player_3digit_value"  value=<?php echo $_POST["player_3digit_value"];?>>
<br>
<input type="submit" name="結果表示">
</form>


入力値：
<?php
$playerArray =array();
$randArray = array();

echo "{$_POST['player_3digit_value']}<br>";

if (!preg_match("/^[0-9]{3}$/",$_POST["player_3digit_value"])){

    echo "⇒エラー！！3桁の数字ではありません。<br>";

}else{
    $playerArray[0] = substr($_POST["player_3digit_value"],0,1);
    $playerArray[1] = substr($_POST["player_3digit_value"],1,1);
    $playerArray[2] = substr($_POST["player_3digit_value"],2,1);
}



$randArray[0] = rand(0,9);
$randArray[1] = rand(0,9);
$randArray[2] = rand(0,9);

echo "正解数：",$randArray[0].$randArray[1].$randArray[2],"<br>";

if($randArray[0] != $randArray[1] && $randArray[0] != $randArray[2] && $randArray[1] != $$randArray[2]){

        echo "⇒ユニークです。<br>";

}else{

    echo "⇒ユニークではありません。<br>";
}

$j = 0;
for ($i=0; $i<9; $i++ ){
    if ( $i % 2 != 0){
    $j++;
    }
}
echo"{$j}";
?>
    </body>
</html>