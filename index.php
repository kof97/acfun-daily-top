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

<script src="./dist/scripts/script.js"></script>