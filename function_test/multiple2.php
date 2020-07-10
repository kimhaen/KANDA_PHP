<?php
$data = array(7,8,9,10,11,12);

function multiple2($data){

    for($i=0;$i<count($data);$i++){

       $data[$i] = $data[$i]*2;
    }
    return $data;
}

echo "戻り値として受け取った配列の要素は、";

$data2 = multiple2($data);

for($i=0;$i<count($data2);$i++){

    echo "{$data2[$i]} ";
}
echo "です。";

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>

    </body>
</html>