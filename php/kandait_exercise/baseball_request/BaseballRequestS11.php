<?php

/*
 * プログラム名：野球ゲームプログラムstep11
 * 作成者：キムへイン
 * 作成日：2020年5月27日
 */

$playerArray = array();
$randArray = array();

echo $_POST["counter"],"回目のトライです。";
$_POST["counter"]++;

if(isset($_POST["random_value0"])){

    $randArray[0] = $_POST["random_value0"];
    $randArray[1] = $_POST["random_value1"];
    $randArray[2] = $_POST["random_value2"];

} else {

    while (true) {

        for($i=0; $i<3; $i++) {
            $randArray[$i] = rand(0, 9);
        }
        if($randArray[0]!=$randArray[1]&&$randArray[0]!=$randArray[2]&&$randArray[1]!=$randArray[2]){
            break;
        }
    }
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<h1>野球ゲームプログラム</h1>


	<form action="BaseballRequestS11.php" method="post">

		3桁の数字を入力してください：



	<input type="text" name="player_3digit_value" value=<?php echo $_POST["player_3digit_value"]?>><br>
	<input type="hidden" name="counter" value=<?php echo $_POST["counter"];?>>
	<input type ="hidden" name="random_value0" value = <?php echo $randArray[0];?>>
	<input type = "hidden" name="random_value1" value = <?php echo $randArray[1];?>>
	<input type = "hidden" name="random_value2" value = <?php echo $randArray[2];?>>
	<input type="submit" value="結果表示">
</form>


入力値：
<?php


echo "{$_POST['player_3digit_value']}<br>";

if (!preg_match("/^[0-9]{3}$/", $_POST["player_3digit_value"])) {

    echo "⇒エラー！！3桁の数字ではありません。<br>";

} else {

    $playerArray[0] = substr($_POST["player_3digit_value"],0,1);
    $playerArray[1] = substr($_POST["player_3digit_value"],1,1);
    $playerArray[2] = substr($_POST["player_3digit_value"],2,1);

}

echo "正解数：", $randArray[0] . $randArray[1] . $randArray[2], "<br>\n";

?>

    </body>
</html>