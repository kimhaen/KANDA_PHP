<?php

/*
 * プログラム名：野球ゲームプログラムstep22
 * 作成者：キムへイン
 * 作成日：2020年5月29日
 */
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<h3>野球ゲームプログラム</h3>
<?php

$playerArray = array();
$randArray = array();

function createRandomNumber(){
    while(true){
        $randArray[0]=rand(1,9);
        $randArray[1]=rand(1,9);
        $randArray[2]=rand(1,9);
        if(isUniqueArray($randArray)){
            break;
        }
    }
    return $randArray;
}

if (isset($_POST["counter"])) {
    ;
    echo $_POST["counter"], "回目のトライです。<br><br>";
    $randArray[0] = $_POST["random_value0"];
    $randArray[1] = $_POST["random_value1"];
    $randArray[2] = $_POST["random_value2"];
} else {

    $randArray = createRandomNumber();
}
$_POST["counter"] ++;



?>

	<form action="BaseballRequestS22.php" method="post">

		3桁の数字を入力してください：
		<input type="text" name="player_3digit_value"value=<?php echo $_POST["player_3digit_value"]?>><br>
		<input type="hidden" name="counter" value=<?php echo $_POST["counter"];?>>
		<input type="hidden" name="random_value0" value=<?php echo $randArray[0];?>>
		<input type="hidden" name="random_value1" value=<?php echo $randArray[1];?>>
		<input type="hidden" name="random_value2" value=<?php echo $randArray[2];?>>
		<input type="submit" value="結果表示">
	</form>

入力値：
<?php


if (isset($_POST["player_3digit_value"])) {

    if (! preg_match("/^[0-9]{3}$/", $_POST["player_3digit_value"])) {

        echo "⇒エラー！！3桁の数字ではありません。<br>";
    } else {

        $playerArray[0] = substr($_POST["player_3digit_value"], 0, 1);
        $playerArray[1] = substr($_POST["player_3digit_value"], 1, 1);
        $playerArray[2] = substr($_POST["player_3digit_value"], 2, 1);
    }

}
echo $playerArray[0] . $playerArray[1] . $playerArray[2];

function isUniqueArray($playerArray){
    if($playerArray[0] != $playerArray[1] && $playerArray[0] != $playerArray[2] && $playerArray[1] != $playerArray[2]){
        return true;
    }else{
        return false;
    }
}
if(isUniqueArray($playerArray)){

    echo " <br> ⇒ユニークです。<br>";

}else{

    echo " <br> ⇒ユニークではありません。<br>";
}

echo "正解数：", $randArray[0] . $randArray[1] . $randArray[2], "<br>";

$strikeCount = 0;
$ballCount = 0;

function countNumberOfStrikes($tmpPlayerArray,$tmpRandArray){
    $tmpStrikeCount=0;
    for($i = 0 ; $i < 3 ; $i++){
        if ($tmpRandArray[$i]===$tmpPlayerArray[$i]){
            $tmpStrikeCount++;
        }
    }
    return $tmpStrikeCount;
}
function countNumberOfBall($tmpPlayerArray,$tmpRandArray){
    $tmpBallCount=0;
    for($i = 0 ; $i < 3 ; $i++){
        for($j = 0 ; $j < 3; $j++){
            if($i != $j){
                if ($tmpRandArray[$i]===$tmpPlayerArray[$j]){
                    $tmpBallCount++;
                }
            }
        }
    }
    return $tmpBallCount;
}

$strikeCount=countNumberOfStrikes($playerArray,$randArray);
$ballCount=countNumberOfBall($playerArray,$randArray);

echo $strikeCount, "ストライク", $ballCount, "ボールです。<br>";

if($strikeCount === 3 ){

    echo "<hr>3ストライク！アウト！！";
}
?>

    </body>
</html>