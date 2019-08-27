<?php $this->need('header.php'); ?>
<main class="main">
	<div class="content">
		<h2 class="post-title"><?php $this->title() ?></h2>
		<div class="post-content">
			<?php $this->content(''); ?>
		</div>

		<?php $this->need('comments.php'); ?>
		<?php $this->need('footer.php'); ?>
	</div>
