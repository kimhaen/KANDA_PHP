<?php
//$month = mt_rand(0, 12);

$month = $_GET['month'];

if($month == '3'){

    echo "春です。";

}else if($month == '6'){

    echo "夏です。";

}else if($month == '9'){

    echo "秋です。";

}else if($month == '12'){

    echo "冬です。";
}else{
    echo "季節未設定です。";
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