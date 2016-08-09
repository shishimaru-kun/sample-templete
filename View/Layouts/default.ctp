<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $metas['title']; ?></title>
	<meta name="description" content="<?php echo $metas['description']; ?>">
	<meta name="keywords" content="<?php echo $metas['keywords']; ?>">
	<?php
	echo $this->Html->css(
		array(
			'common',
			//$metas['style']['bodyId']
		)
	);
	echo $this->fetch('css');
	echo $this->Html->script(
		array(
			'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
			'common'
		)
	);
	echo $this->fetch('script');
	echo $this->fetch('meta');
	?>
</head>

<body<?php echo ($metas['style']['bodyClass'])? ' class="' . $metas['style']['bodyClass'] . '"': ''; ?><?php echo ($metas['style']['bodyId'])? ' id="' . $metas['style']['bodyId'] . '"': ''; ?>>

<?php echo $this->element('/common/header'); ?>

	<div class="col2" id="contents">

<?php echo $this->element('/common/path'); // パンくず上部 ?>

		<div class="__wrap">
			<div id="main">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>

	<!-- #contents --></div>

<?php echo $this->element('/common/footer'); ?>
<?php
	echo $this->Html->script(
		array(
			'/js/event.js',
		)
	);
?>

</body>
</html>
