<?php
/**
 * 这是一个炒鸡水的两栏式主题，适合个人博客使用。
 *
 *
 * @package 不知道叫什么名字好
 * @author 闲淡酱
 * @version 2019.3.9
 * @link https://www.geekcj.com/
 */
$this->need('header.php');?>

    <div class="content">
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