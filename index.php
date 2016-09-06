<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arno-acfun每日排行</title>
	<link rel="stylesheet" href="./dist/styles/style.min.css">
</head>
<body>
	<?php require './query.php'; ?>
	
	<div class="main">
		<?php foreach ($categorys as $key => $value): ?>
			<?php $category = $value['category']; ?>
			<div>
				<h2><?php echo $category; ?></h2>
				<?php foreach ($all[$category] as $k => $v): ?>
					<a href=""><li><?php echo $v['name']; ?></li></a>
				<?php endforeach ?>
			</div>
		<?php endforeach ?>
	</div>

	<div class="video-loading">
		<div class="loading"></div>

		<div class="video">
			<embed height="452.4" width="715" class="player" allowFullScreenInteractive="true" 
				pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" 
				AllowScriptAccess="always" rel="noreferrer" 
				flashvars="type=page&url=http://www.acfun.tv/v/ac2359452" 
				src="http://cdn.aixifan.com/player/ACFlashPlayer.out.swf" 
				type="application/x-shockwave-flash" allowfullscreen="true" 
				quality="high" wmode="window"></embed>
		</div>
	</div>
</body>
</html>