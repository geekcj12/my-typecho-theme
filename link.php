<?php
/**
* 友情链接
*
* @package custom
*/
$this -> need('header.php');
?>
	<main class="main">
		<div class="content">
			<h2 class="post-title"><?php $this->title() ?></h2>
			<div class="links">
				<?php Links_Plugin::output("
				<li class='links-item'>
					<a href='{url}' target='_blank'>
						<img src='{image}' alt='{name}' class='links-avatar'>
						<p class='links-name'>{name}</p>
					</a>
				</li>
				", 0); ?>
			</div>
	<?php $this -> need('footer.php'); ?>