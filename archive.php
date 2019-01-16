<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="content">
    <h2 class="category-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('“%s”分类下的文章'),
            'search'    =>  _t('含关键词“%s”的文章'),
            'tag'       =>  _t('含标签“%s”的文章'),
            'author'    =>  _t('“%s”发布的文章')
        ), '', ''); ?>
    </h2>

    <?php while($this->next()): ?>
        <article>
            <h2>
                <a href="<?php $this->permalink() ?>"><?php $this->sticky(); ?><?php $this->title() ?></a>
            </h2>
             <div class="article-meta">
                 <i class="fa fa-calendar"></i><?php $this->date('Y-m-d'); ?> · <i class="fa fa-folder"></i><?php $this->category(','); ?> · <i class="fa fa-eye"></i><?php get_post_view($this) ?> 次围观
            </div>
            <p><?php $this->excerpt(100);?></p>
            <p class="more"><a href="<?php $this->permalink() ?>">继续阅读</a></p>
        </article>
    <?php endwhile; ?>

    <div id="page-nav">
            <?php $this->pageLink('<span class="navigator">上一页</span>','prev'); ?>
 	        <?php $this->pageLink('<span class="navigator">下一页</span>','next'); ?>
    </div>
</div>

<?php $this->need('footer.php'); ?>