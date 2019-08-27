<?php
/**
 * 这是一个炒鸡水的两栏式主题，适合个人博客使用。
 *
 *
 * @package 不知道叫什么名字好
 * @author 闲淡酱
 * @version 2019.8.27
 * @link https://www.geekcj.com/
 */
$this->need('header.php');?>
    <main class="main">
        <div class="content">
            <div class="article-list">
                <?php while($this->next()): ?>
                    <article class="article-item">
                        <h3 class="article-title">
                            <a href="<?php $this->permalink() ?>" class="article-title-link"><?php $this->sticky(); ?><?php $this->title() ?></a>
                        </h3>
                        <div class="article-meta">
                            <i class="fa fa-calendar"></i><?php $this->date('Y-m-d'); ?> · <i class="fa fa-folder"></i><?php $this->category(','); ?> · <i class="fa fa-eye"></i><?php get_post_view($this) ?> 次围观
                        </div>
                        <p class="article-desc"><?php $this->excerpt(100);?></p>
                        <p class="article-more"><a href="<?php $this->permalink() ?>">继续阅读</a></p>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php $this->pageNav('«', '»', 1, '...', array('wrapTag' => 'nav', 'wrapClass' => 'page-navigator', 'itemTag' => 'span', 'textTag' => 'span', 'currentClass' => 'current', 'prevClass' => 'prev', 'nextClass' => 'next',)); ?>

<?php $this->need('footer.php'); ?>