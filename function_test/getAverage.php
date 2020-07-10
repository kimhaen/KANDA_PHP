<?php
$data = array(7,8,9,10,11,12);

function getAverage($data){

    $sum=0;
    for ($i = 0; $i < count($data); $i++) {

        $sum += $data[$i];
    }

    return $sum/count($data);

}

echo "平均値は",getAverage($data),"です。";
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>

    </body>
</html>