<?php

/* *プログラム名：点数評価プログラムstep2
 *作成者：キムへイン
 *作成日：2020年5月18日 */

$score =-99;
$result = "";

if($score>=0 && $score<=59){

    $result = "F";
}else if($score>= 60 && $score<70){
    $result = "D";
}else if($score>=70 && $score<80){
    $result = "C";
}else if($score>=80 && $score<90){
    $result = "B";
}else if($score>=90 && $score<=100){
    $result = "A";
}else{
    $result = "0";
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>
<h1>点数評価プログラム</h1><br>

点数：<?php echo "{$score}";?><br>

<?php
if($result=="0"){

    echo "範囲外エラー：再度0から100までの数字を入力してください。";


    }else{

        echo "結果：評価 {$result}です。";
    }
    ?>

    </body>
</html>