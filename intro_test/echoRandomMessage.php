<?php
//ランダム数値生成
$n = mt_rand(1, 5);

//条件処理
if ($n === 5) {

    echo "「{$n}」が出た！大当たり！！！";

} else if ($n === 4) {

    echo "「{$n}」が出た！当たり！！";

} else {

    echo "「{$n}」が出た！また来てね！ ";
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