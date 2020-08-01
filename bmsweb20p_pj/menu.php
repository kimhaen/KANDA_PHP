<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：ページのメイン画面
 * 作成日時			：2020/06/09
 * 作成者			：キムへイン
 */

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style>
h1 {
	text-align: center;
}

h2 {
	text-align: center;
}

.menu {
	text-align: center;
}
</style>
</head>
<body>
	<h1>書籍販売システムWeb版 Ver1.0</h1>
	<hr style="border:solid 2px lightgray;">
	<div class="title" style="margin: 0 auto">
		<h2>MENU</h2>
	</div>
	<hr><br>
	<div class="menu" style="margin: 0 auto">
		<a href="list.php">【書籍一覧】</a><br><br>
		<a href="insert.php">【書籍登録】</a><br><br><br><br>
		<a href="showCart.php">【カートの状況確認】</a><br><br>
		<a href="insertIniData.php">【初期データ登録】</a><br><br>
		<a href="orderStatus.php">【購入状況確認】</a><br><br><br><br>
		<a href="logout.php">【ログアウト】</a><br><br>
	</div>
</body>
</html>
<?php include_once'footer.html';?>