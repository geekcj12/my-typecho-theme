<?php $this->need('header.php'); ?>

<main class="main">
    <div class="content">
        <h3 class="post-title"><?php $this->title() ?></h3>
        <div class="post-meta"><i class="fa fa-calendar"></i><?php $this->date('Y-m-d'); ?> · <i class="fa fa-commenting"></i><?php $this->commentsNum('%d 条评论'); ?> · <i class="fa fa-file-text"></i><?php echo art_count($this->cid); ?>字 · <i class="fa fa-eye"></i><?php get_post_view($this) ?> 次围观</div>

        <div class="post-content">
            <?php $this->content(''); ?>
        </div>
        <?php $this->need('comments.php'); ?>
        <?php $this->need('footer.php'); ?>
    </div>
