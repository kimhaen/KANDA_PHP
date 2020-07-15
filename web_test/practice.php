<?php

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>
<a href="index.php">index.phpに戻る</a>


<form action="result.php" method="get">
<h3>ファームからのGET送信</h3>
<input type="hidden" name="gety" value="get">
<input type="submit" value="送信">

</form>

<form action="result.php" method="post">
<h3>ファームからのPOST送信</h3>
<input type="hidden" name="posty" value="post">
<input type="submit" value="送信">

</form>

<h3>リンクからの送信</h3>
<input type="hidden" value="link">
<a href="result.php">送信</a>


    </body>
</html>