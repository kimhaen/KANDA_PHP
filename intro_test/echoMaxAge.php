<?php
$age_list = array("A" => 23, "B" => 31, "C" => 18);

$max_age = max(array_values($age_list));

foreach ($age_list as $key => $values){

    if($values === $max_age){

        $max_name = $key;
    }
}


echo "３名の中で最も年上なのは{$max_name}さんで{$max_age}歳です。";

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>

    </body>
</html>