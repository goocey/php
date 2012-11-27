<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter へようこそ</title>
    <link href="<?=base_url();?>css/base.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div id="container">
    <h1>給与計算</h1>
下の表に該当月分の勤務実績を入力して送信を押してください。
<?= form_open('worktime/form') ?>
<?= form_textarea($textarea) ?><br />
何月分の勤務実績か選択してください。
<?= form_dropdown() ?>
<?= form_submit('button','送信') ?>
<?= form_close() ?>
    <div id="body">

</div>
</div>

</body>
</html>
