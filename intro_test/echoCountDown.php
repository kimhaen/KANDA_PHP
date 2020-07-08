<?php
$station = array('浜松町', '新橋', '有楽町', '東京', '神田');
$cnt = count($station);

for($i=0;$i<count($station);$i++){

    echo "次は$station[$i]に止まります。神田まであと{$cnt}駅です。<br>";
    $cnt--;

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