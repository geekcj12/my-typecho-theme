<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#00bdff">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<link href="<?php $this->options->themeUrl('css/i.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/OwO.min.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
<?php if($this -> options -> favicon): ?>
    <link rel="icon" href="<?php $this -> options -> favicon(); ?>" sizes="192x192"/>
<?php else: ?>
    <link rel="icon" href="<?php $this -> options -> themeUrl('image/192.png'); ?>" sizes="192x192"/>
<?php endif; ?>
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<!-- 输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body>
    <div id="wrap">
        <header class="header">
            <i id="menu" class="fa fa-bars" aria-hidden="true" aria-controls="menu" aria-expanded="false"></i>
            <a href="<?php $this->options->siteUrl(); ?>" class="site-title"><?php $this->options->title(); ?></a>
        </header>
        <aside class="sidebar">
            <div class="sidebar-top">
                <?php if($this -> options -> avatar): ?>
                    <img src="<?php $this -> options -> avatar(); ?>" class="avatar">
                <?php else: ?>
                    <img src="https://secure.gravatar.com/avatar/<?php echo md5(strtolower($this->author->mail)); ?>?s=256" class="avatar">
                <?php endif; ?>
                <h3 class="site-name">
                    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
                </h3>
            </div>
            <nav class="sidebar-nav">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="<?php $this->options->siteUrl(); ?>">首页</a>
                    </li>
                    <?php $this->widget('Widget_Metas_Category_List')->parse('<li class="menu-item"><a href="{permalink}">{name}</a></li>'); ?>
                    <?php $this->widget('Widget_Contents_Page_List')->parse('<li class="menu-item"><a href="{permalink}">{title}</a></li>'); ?>
                </ul>
            </nav>
        </aside>
