<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php
function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    $depth = $comments->levels +1;
    if ($comments->url) {
        $author = '<a href="' . $comments->url . '"target="_blank"' . ' rel="external nofollow">' . $comments->author . '</a>';
    } else {
        $author = $comments->author;
    }
?>

<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
if ($depth > 1 && $depth < 3) {
    echo ' comment-child ';
    $comments->levelsAlt('comment-level-odd', ' comment-level-even');
}
else if( $depth > 2){
    echo ' comment-child2';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
}
else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
?>">
    <div id="<?php $comments->theId(); ?>">
        <?php
            $host = 'https://secure.gravatar.com';
            $url = '/avatar/';
            $size = '150';
            $default = 'mm';
            $rating = Helper::options()->commentsAvatarRating;
            $hash = md5(strtolower($comments->mail));
            $avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=' . $default;
        ?>
        <div class="comment-view" onclick="">
            <div class="comment-header">
                <img class="avatar" src="<?php echo $avatar ?>" width="<?php echo $size ?>" height="<?php echo $size ?>" />
                <span class="comment-author<?php echo $commentClass; ?>"><?php echo $author; ?></span>
            </div>
            <div class="comment-content">
                <p><?php $comments->content(); ?></p>
            </div>
            <div class="comment-meta">
                <time class="comment-time"><?php $comments->date('M j, Y'); ?></time>
                <span class="comment-reply"><?php $comments->reply('回复'); ?></span>
            </div>
        </div>
    </div>
    <?php if ($comments->children) { ?>
        <div class="comment-children">
            <?php $comments->threadedComments($options); ?>
        </div>
    <?php } ?>
</li>
<?php } ?>


<div id="<?php $this->respondId(); ?>" class="comment-container">
    <div id="comments" class="clearfix">
        <?php $this->comments()->to($comments); ?>
        <?php if($this->allow('comment')): ?>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="comment-form" role="form" onsubmit ="getElementById('submit').disabled=true;return true;">
          <h3><?php $this->commentsNum(_t('沙发还在'), _t('只有一条评论QAQ'), _t('已经有 %d 条评论啦')); ?></h3>
          <span class="response"><?php if($this->user->hasLogin()): ?>  「<a href="<?php $this->options->profileUrl(); ?>" data-no-instant><?php $this->user->screenName(); ?></a>」<a href="<?php $this->options->logoutUrl(); ?>" title="Logout" data-no-instant>换个ID</a> ?<?php endif; ?> <?php $comments->cancelReply('取消回复'); ?></span>
            <?php if(!$this->user->hasLogin()): ?>
            <input type="text" name="author" maxlength="12" id="author" class="text" placeholder="昵称" value="" required>
            <input type="email" name="mail" id="mail" class="text" placeholder="邮箱" value="" <?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>
            <input type="url" name="url" id="url" class="text" placeholder="站点" value="" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>>
            <?php endif; ?>

            <textarea name="text" id="textarea" class="textarea" placeholder="快来说两句吧" required ><?php $this->remember('text',false); ?></textarea>

            <div class="OwO"></div>

            <button type="submit" class="btn">写好了</button>
            <?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
        </form>
        <?php else : ?>
            <span class="response">这里不给评论⊙▽⊙</span>
        <?php endif; ?>

        <?php if ($comments->have()): ?>

        <?php $comments->listComments(); ?>

        <div class="lists-navigator clearfix">
            <?php $comments->pageNav('←','→','2','...'); ?>
        </div>

        <?php endif; ?>
    </div>
</div>
