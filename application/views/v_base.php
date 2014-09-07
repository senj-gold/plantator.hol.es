<!DOCTYPE html>
<!-- CSS hacks:	http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!-->
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Please don't add "maximum-scale=1" here. It's bad for accessibility. -->
    <link rel="shortcut icon" href="/media/img/favicon.ico" type="image/x-icon" />

    <!--  fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">		
    <link href="http://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="<?= $keywords ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width">
    
    <?php foreach ($styles as $style): ?>
        <link rel="stylesheet" type="text/css" href="<?=$style ?>">
    <?php endforeach ?>
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        
    </head>
    <body lang="ru">
        <?php if(isset($v_body)):?><?=$v_body?><?php endif;?>
        <?php foreach ($scripts as $script): ?>
            <script src="<?= $script ?>" type="text/javascript"></script>
        <?php endforeach ?>
    </body>
</html>