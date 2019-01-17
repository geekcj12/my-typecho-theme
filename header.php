<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<link href="<?php $this->options->themeUrl('css/i.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/OwO.min.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
<link rel="icon" href="<?php $this->options->themeUrl('image/32.png'); ?>" sizes="32x32"/>
<link rel="icon" href="<?php $this->options->themeUrl('image/192.png'); ?>" sizes="192x192"/>
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<!-- 输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body>
    <div class="header">
        <i id="menu" class="fa fa-bars" aria-hidden="true"></i>
        <div class="site-title">
            <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
        </div>
    </div>
    <div id="left-col">
        <div class="hd">
            <img src="https://secure.gravatar.com/avatar/7400af4725430d4029381e34d0bfcdff?s=256">
            <h3><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></h3>
        </div>
        <nav>
            <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
            <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
            <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </nav>
    </div>