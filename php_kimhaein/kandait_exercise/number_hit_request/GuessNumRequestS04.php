<?php
/* *プログラム名：数字当てプログラムstep4
 *作成者：キムへイン
 *作成日：2020年5月18日 */


?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>
<h1>数字当てプログラム</h1><br>
<form action = "GuessNumRequestS04.php"method = "POST">
0から9までの数値を入力してください。：
<input type="text" name="player_value" value=<?php echo $_POST["player_value"]?>>
<input type="submit" value="結果表示">
</form>
<?php
$userNum = $_POST[ "player_value"];
$ansNum = 5;

echo "予想数：{$userNum}<br>";
echo "正解数：{$ansNum}<br>";

if($userNum<0 || $userNum>9){

    echo "エラー！！0から9の数字ではありません<br>";
}else{

    if($ansNum>$userNum){

    echo "{$userNum}より大きいです。";

    }else if($ansNum<$userNum){

    echo "{$userNum}より小さいです。";

    }else{

    echo "!!大当たり!!";
    }
}



?><br>



    </body>
</html>