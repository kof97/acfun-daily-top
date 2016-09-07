<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Arno-acfun 每日排行</title>
    <link rel="stylesheet" href="./dist/styles/style.min.css">
</head>
<body>
    <?php require './query.php'; ?>

	<div class="indexer shadow">
       	<form action="" method="get">
	    	<input type="text" name="time" onClick="WdatePicker({minDate:'2016-09-05',maxDate:'<?php echo $now; ?>'})" value="<?php echo $time; ?>"/>
       		<input type="submit" value="submit">
       	</form>
    </div>

	<div class="row"></div>
	<div class="row"></div>

    <div class="main">
		<?php if (count($categorys) < 1): ?>
			<h2>没有找到 <?php echo $time; ?> 的内容，资源是从 2016-09-05 号才开始的哦 ~ ~ ~</h2>
		<?php endif ?>

        <?php foreach ($categorys as $key => $value): ?>
            <?php $category = $value['category']; ?>
            <div>
                <h2><?php echo $category; ?></h2>
                <?php foreach ($all[$category] as $k => $v): ?>
                    <a href="javascript:(0)" data-href="<?php echo $v['url']; ?>"><li><?php echo $v['name']; ?></li></a>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </div>

    <div class="video-loading">
        <div class="loading"></div>

        <div class="video">

        </div>
    </div>
</body>
</html>

<script src="./dist/My97DatePicker/WdatePicker.js"></script>
<script src="./dist/scripts/script.js"></script>