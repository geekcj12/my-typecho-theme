<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="main">
    <div class="content">
    <h3 class="category-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('“%s”分类下的文章'),
            'search'    =>  _t('含关键词“%s”的文章'),
            'tag'       =>  _t('含标签“%s”的文章'),
            'author'    =>  _t('“%s”发布的文章')
        ), '', ''); ?>
    </h3>

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
</div>

<?php $this->need('footer.php'); ?>