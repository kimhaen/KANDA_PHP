<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：ログイン処理
 * 作成日時			：2020/06/16
 * 作成者			：キムへイン
 */


//POST送信された情報がある場合登録機能実行


$user = $_POST['user'];
$pass = $_POST['password'];

    if(isset($user)){

        session_start();

        require_once ("dbprocess.php");

        $sql = "SELECT * FROM userinfo WHERE user='{$user}'and password='{$pass}'";

        $result = executeQuery($sql);

        $userinfo = mysqli_fetch_assoc($result);

        $_SESSION["userInfo"]= $userinfo;

        setcookie("user",$user,(time()+30*86400),'/');


        header("location:menu.php");



    }
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
	<hr style="border:solid 2px lightgray;">
	<div class="title">
<h1></h1>
<br><br>
	</div>
	<hr>
	<br>
	<div class="new">
		<form action="login.php" method="POST">
			<table>

				<tr>
					<td>ユーザー</td>
					<td>
			<input type="text" name="user" value=""></td>
			</tr>
				<tr>
					<td>パスワード</td>
					<td>
			<input type="text" name="password" value=""></td>
				</tr>


			</table>



					<td><br><input type="submit"value="ログイン"></td>

					<br><br><br><br>

		</form>
	</div>

</body>
</html>
<?php include_once'footer.html';?>