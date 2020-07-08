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
/* ②counterにまだ格納した数字がないので、if文のelse処理が行う→createRandomNumberの関数が行い、結果をrandArrayに代入
 * 2回目の以上の場合ははif処理が行い、文字列を出力し、randArrayに格納します。*/
if (isset($_POST["counter"])) {
    ;
    echo $_POST["counter"], "回目のトライです。<br><br>";
    $randArray[0] = $_POST["random_value0"];
    $randArray[1] = $_POST["random_value1"];
    $randArray[2] = $_POST["random_value2"];
} else {

    $randArray = createRandomNumber();
}
/* ③counterをインクリメント*/
$_POST["counter"] ++;



?>
<!-- ①ユーザーから数字を入力してもらう + 送信でもう一度ページを呼び出す -->

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

/* ④ ユーザーから入力してもらった3桁の数字の確認→条件確認を行う後に3桁の数字をそれぞれ桁ごとにplayArray配列変数に格納*/
if (isset($_POST["player_3digit_value"])) {

    if (! preg_match("/^[0-9]{3}$/", $_POST["player_3digit_value"])) {

        echo "⇒エラー！！3桁の数字ではありません。<br>";
    } else {

        $playerArray[0] = substr($_POST["player_3digit_value"], 0, 1);
        $playerArray[1] = substr($_POST["player_3digit_value"], 1, 1);
        $playerArray[2] = substr($_POST["player_3digit_value"], 2, 1);
    }

}

/* ⑤画面に表示 */
 echo $playerArray[0] . $playerArray[1] . $playerArray[2];


 /* ⑦桁ごとに比較してリターンする */
function isUniqueArray($playerArray){
    if($playerArray[0] != $playerArray[1] && $playerArray[0] != $playerArray[2] && $playerArray[1] != $playerArray[2]){
        return true;
    }else{
        return false;
    }
}

/* ⑥playArrayを引数として関数isUniqueArrayを行う→⑧trueならユニークです、falseならユニークではありませんをリターン */
if(isUniqueArray($playerArray)){

    echo " <br> ⇒ユニークです。<br>";

}else{

    echo " <br> ⇒ユニークではありません。<br>";
}
/* ⑨ランダムで数値生成した正解数字を表示 */
echo "正解数：", $randArray[0] . $randArray[1] . $randArray[2], "<br>";


/* ⑩ストライクとボールを表示する変数宣言*/
$strikeCount = 0;
$ballCount = 0;
/* ⑫それぞれの配列の桁を比較して、ストライクとボールを求める*/
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
/* ⑪ストライクとボールを表示するための関数を引数に配列関数を指定して行う*/
$strikeCount=countNumberOfStrikes($playerArray,$randArray);
$ballCount=countNumberOfBall($playerArray,$randArray);

/* ⑬代入されたリターンの値を画面に表示する*/
echo $strikeCount, "ストライク", $ballCount, "ボールです。<br>";


/* ⑭ストライクの値が3の場合は正解なので終了*/
if($strikeCount === 3 ){

    echo "<hr>3ストライク！アウト！！";
}
?>

    </body>
</html>