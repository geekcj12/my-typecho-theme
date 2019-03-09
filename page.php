<?php $this->need('header.php'); ?>
<div class="content">
	<div class="page-content">
		<h2 class="post-title"><?php $this->title() ?></h2>
		<div class="post">
			<?php $this->content(''); ?>
		</div>
	</div>

<?php $this->need('comments.php'); ?>
</div>

<?php $this->need('footer.php'); ?>