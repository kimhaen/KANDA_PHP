
<?php

/* *プログラム名：数字当てプログラムstep1
*作成者：キムへイン
*作成日：2020年5月18日 */


$userNum = 5;
$ansNum = 5;


echo "予想数：{$userNum}<br>";
echo "正解数：{$ansNum}<br>";

if($ansNum>$userNum){

    echo "{$userNum}より大きいです。";

}else if($ansNum<$userNum){

    echo "{$userNum}より小さいです。";
}else{

    echo "!!大当たり!!";
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>

    </body>
</html>