<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>TOPページ</title>
    <link href="<?=base_url();?>css/base.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div id="container">
	<h1>CodeIgniter へようこそ!</h1>

	<div id="body">
        このページはこのアプリケーションで作成されている一覧を表示します。<br />
        <?php if (isset($contents) == 1): ?>
            <?php foreach ($contents as $contents_key => $contents_value): ?>
                <a href="<?= $contents_key ?>"><?=$contents_value?></a><br />
            <?php endforeach; ?>
        <?php endif; ?>
	</div>

	<p class="footer"></p>
</div>

</body>
</html>
<?= phpinfo() ?>
