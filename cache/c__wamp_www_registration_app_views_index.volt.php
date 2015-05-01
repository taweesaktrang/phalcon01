<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
<meta charset="utf-8">
<title>ระบบลงทะเบียนออนไลน์</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo $this->url->get('css/uikit.min.css'); ?>" rel="stylesheet">
</head>
<body>
	<div class="uk-text-center">
		<h1>ระบบลงทะเบียนออนไลน์</h1>
		<a href="<?php echo $this->url->get('signup'); ?>" class="uk-button uk-button-primary">
			<i class="uk-icon-plus"></i> ลงทะเบียนใหม่</a>
	</div>
	<hr/>
	<div class="uk-container uk-container-center">
		<?php echo $this->getContent(); ?>
	</div>
	<hr/>
	<footer class="uk-text-center" style="margin-top: 20px;">
		<a href="<?php echo $this->url->get(''); ?>">กลับหน้าหลัก</a>
	</footer>
</body>
</html>