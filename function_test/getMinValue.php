<?php
$a = 1.55;
$b = 2.12;

function getMinValue($a,$b){

    if($a>$b){

        return $b;

    }else{

        return $a;
    }

}
if(getMinValue($a,$b)==$a){
    echo "変数 a と変数 b で小さいのは、「変数 a の",getMinValue($a, $b),"」です。";
}else{
    echo "変数 a と変数 b で小さいのは、「変数 b の",getMinValue($a, $b),"」です。";
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