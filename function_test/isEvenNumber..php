<?php
$value=79931;

function isEvenNumber($value){

    if($value%2==0){
       return true;
    }else{
       return false;
    }
}

if(isEvenNumber($value)==true){

    echo "{$value}は、偶数です。";
}else{

    echo "{$value}は、奇数です。";
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