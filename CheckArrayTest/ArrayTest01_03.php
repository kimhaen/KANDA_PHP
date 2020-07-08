<?php

    $profile = array("名前"=>"神田太郎","性別"=>"男","年齢"=>"23");


?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>

    <?php

    echo "私の名前は 「",$profile["名前"],"」です。<br>";
    echo $profile["性別"],"です。<br>";
    echo $profile["年齢"],"歳です。";

    ?>

    </body>
</html>