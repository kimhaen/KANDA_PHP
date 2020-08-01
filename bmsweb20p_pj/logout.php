<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：ログアウト処理
 * 作成日時			：2020/06/17
 * 作成者			：キムへイン
 */



    session_start();


    unset($_SESSION['userInfo']);

/*     var_dump($_SESSION); */
?>
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<style>
h1 {
	text-align: center;
}

h2 {
	text-align: center;
	margin-top: -15px;
}

.new {
	text-align: center;
}

table {
    margin: 0 auto;
    width: 30%;

}

td {
	text-align: center;
	background-color: thistle;
}

.kaku {
	background: none;
}
</style>
</head>

<!-- html画面で情報を入力してもらい、formで送信 -->

<body>
	<h1>書籍販売システム</h1>
	<hr style="border:solid 2px lightgray;"><br>
	<div class="title">
<h2>ログアウト画面</h2>

	</div>
	<hr>
	<br>
	<div class="new">
		<form action="login.php" method="POST">


				<?php if(!isset($_POST['user'])){  ?>


					<td><h3>ログアウトしました。</h3>

					<br><a href="login.php">ログイン画面に戻る</a></td>
					<?php }else{?>
					<br><br><br><br>

					<?php }?>
		</form>
	</div>

</body>
</html>
<?php include_once'footer.html';?>