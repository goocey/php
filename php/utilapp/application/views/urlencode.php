<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter へようこそ</title>
    <link href="<?=base_url();?>css/base.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div id="container">
    <h1>URLエンコード・デコード</h1>
<?= form_open('urlencode/form') ?>
<?var_dump $textarea['value'] ?>
<?= form_textarea($textarea) ?><br />
<?= form_submit('button','encode') ?><br />
<?= form_submit('button','decode') ?><br />
    <div id="body">
<?php if (isset($multiline) == 1): ?>
<?php foreach ($multiline as $multi_key => $multi_value): ?>
<?= $multi_key  ?>:<br>
<?php if (isset($multi_value)): ?>
<?= $multi_value ?>
<br /><br />
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>
</div>
</div>

</body>
</html>
