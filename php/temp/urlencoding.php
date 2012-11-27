<?php
header("Content-type: text/html; charset=utf-8");

$area1 = '&nbsp;';
$area2 = '&nbsp;';
$p1 = $_POST['area1'];
$p2 = $_POST['area2'];
$charset = $_POST['charset']; // 変換前の文字コード
// TODO:改行コードを取り除いて配列に
$p1 = mb_convert_encoding($p1, 'UTF-8', 'SJIS');

// 変換
if (mb_strlen($p1) > 0) {
    $p1 = mb_convert_encoding($p1, $charset, 'UTF-8');
    $area1 = urlencode($p1);
}
// 逆変換
if (mb_strlen($p2) > 0) {
    //$p2 = mb_convert_encoding($2, 'UTF-8', $charset);
    $area2 = urldecode($p2);
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>色々なツールたち</title>
</head>
<body>

URLエンコード、デコード
<form name="form" method="POST" action="urlencoding.php" target="main">
 <table border="1">
  <tr>
  <select name='charset'>
    <option value='SJIS'>SJIS</option>
    <option value='UTF-8'>UTF-8</option>
    <option value='EUC-JP'>EUC-JP</option>
  </select>
   <td>URLエンコード</td>
   <td>
    <input type='text' name="area1"><?php echo $p1; ?><br />
   </td>
   <td>
    <input type='text' name="out1"><?php echo $area1; ?>
   </td>
  </tr>

  <tr>
   <td>URLデコード</td>
   <td>
    <input type='text' name="area2"><?php echo $p2; ?></textarea><br />
   </td>
   <td>
    <input type='text' name="out2"><?php echo $area2; ?></textarea>
   </td>
  </tr>
 </table>
 <input type="submit" name="submit" value="send">
<tr>
<td>文字サイズ</td>
<input type='text' name='src_text' <?php echo $p2?>
</form>
</body>
</html>

