<?php

$gender_list = array('男性', '女性', '男性', '男性', '女性', '男性');
$male = 0;
$female = 0;


for($i=0;$i<count($gender_list);$i++){

    if($gender_list[$i] === '男性'){

        $male++;
    }else{

        $female++;

    }
}

echo "男性の人数は{$male}名、女性の人数は{$female}名です。";

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>

    </body>
</html>