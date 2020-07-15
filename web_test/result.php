<?php
if(isset($_GET['gety'])){

echo"ファームからGET送信されました！";


}else if(isset($_POST['posty'])){

    echo"ファームからPOST送信されました！";

}else{

    echo"リンクから送信されました！";

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