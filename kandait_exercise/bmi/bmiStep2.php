<?php
/* プログラム名：BMI計算プログラムstep2
 作成者：金海仁 キムへイン
 作成日：2020年5月8日
 */

$height = $_POST['height'];
$weight = $_POST['weight'];

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
※※BMI計算プログラム開始します※※<br><br>
<?php
echo "身長：",$height,"cm <br>";
echo "体重：",$weight,"kg";

?>
<br><br>
※※BMI計算プログラム終了します※※

</body>
</html>