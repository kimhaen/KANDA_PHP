<?php

/*
 * プログラム名：点数評価プログラムstep3
 * 作成者：キムへイン
 * 作成日：2020年5月18日
 */

// ユーザーから入力してもらう値の変数
$score = $_POST['user_num'];
// ユーザーから入力してもらう値の点数の評価変数
$result = "";

// 点数を条件処理で評価
if ($score >= 0 && $score <= 59) {

    $result = "F";
} else if ($score >= 60 && $score < 70) {
    $result = "D";
} else if ($score >= 70 && $score < 80) {
    $result = "C";
} else if ($score >= 80 && $score < 90) {
    $result = "B";
} else if ($score >= 90 && $score <= 100) {
    $result = "A";
} else {
    $result = "0";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<h1>点数評価プログラム</h1>
	<br> 点数を入力してください。

	<!-- フォームを生成 -->
	<form action="ScoreJudgeS3.php" method="post">
		<input type="text" name="user_num"><br> <input type="submit"
			value="点数表示">
	</form>
点数：<?php echo "{$score}";?><br>

<?php

// 画面に表示する文字列

if ($result == "0") {

    echo "範囲外エラー：再度0から100までの数字を入力してください。";
} else {

    echo "結果：評価 {$result}です。";
}
?>

    </body>
</html>