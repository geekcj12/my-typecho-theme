<?php
/**
* 友情链接
*
* @package custom
*/
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this -> need('header.php'); ?>
<div class="content">
   <div class="page-content">
      <h2 class="post-title"><?php $this->title() ?></h2>
         <div class="post">
		      <div class="friends">
    	               <ul class="links">
		            		<?php Links_Plugin::output("SHOW_MIX"); ?>
	                 	</ul>
	              </div>
	</div>
    </div>
</div>

<?php $this -> need('footer.php'); ?>