<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：購入確認案内と購入内容を表示
 * 作成日時			：2020/06/16
 * 作成者			：キムへイン
 */

//本の情報一覧を表示

session_start();


$cartinfo = $_SESSION['cartinfo'];

/*     var_dump($_SESSION); */

/* $user = $_SESSION['userinfo']['user']; */
$user= $_SESSION['userInfo']['user'];
$autho = $_SESSION['userInfo']['authority'];

if($autho==1){

    $autho = "一般ユーザー";

}else{

    $autho = "管理者";
}
$quantity = 1;
$date = date('Y-m-d');





/*  session_destroy(); */
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
	margin-top: -15px;
}

.new {
	text-align: center;
}

.tb {
	border-right: none;
    margin: 0 auto;
    width: 80%;
    border-right:none;
}

td {
	text-align: center;

}

th{
background-color: thistle;
}
.menubar{
    text-align:center;

}
.kekka{
    text-align: center;
    }
.kk{
    width: 50%;
    text-align: center;
    display: inline;
    background: greenyellow;
    }
.tot{
    color: white;
    display: inline;
}
.buy{
    text-align: right;
    padding-right: 300px;
    }
.usrid{
     text-align: end;
    margin-top: -15px;
    margin-right: 79px;
    }
.usrps{
    text-align: end;
    margin-top: -15px;
    margin-right: 10px;
    }
</style>
</head>
<body>
	<h1>書籍販売システムWeb版 Ver1.0</h1>
<hr style="border:solid 2px lightgray;">
	<div class="title">
		<a href="menu.php">【メニュー】</a> <a href="insert.php">【書籍登録】</a>
						<div class="usrid">名前：<?=$name?><br></div>
		<h2>購入品確認</h2>
			<div class="usrps">権限：<?=$autho?></div>
	</div>
	<hr>
	<h3 style="margin-left: 130px;">
下記の商品を購入しました。<br>
ご利用いただきありがとうございました。</h3>


	<br>
	<table class="tb" >

<tr>
<th>ISBN</th>
<th>書籍名</th>
<th>価格</th>

</tr>

<?php
require_once ("dbprocess.php");
for($i=0;$i<count($cartinfo);$i++){

        ?>

    <tr>
			<td><a href="detail.php?isbn=<?=$row['isbn']?>"><?=$cartinfo[$i]['isbn']?></a></td>
			<td><?=$cartinfo[$i]['title']?></td>
			<td><?=$cartinfo[$i]['price']?>円</td>
			<div class="tot"><?= $tot += $cartinfo[$i]['price']  ?></div>

		</tr>

    <?php
    $isbn = $cartinfo[$i]['isbn'];
    $sql = "INSERT INTO orderinfo values(null,'{$user}','$isbn','$quantity','{$date}')";
    $result = executeQuery($sql);
}




    ?>

	</table>
<br><br>
	<hr style="border:double 3px darkgray;">
<div class="kekka">
<div class="kk">&nbsp&nbsp&nbsp合計&nbsp&nbsp&nbsp</div> <?=$tot;?>円

</div>

</form>
</body>
</html>