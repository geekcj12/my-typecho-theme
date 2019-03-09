<?php
/**
* 友情链接
*
* @package custom
*/
$this -> need('header.php');
?>
	<div class="content">
		<div class="page-content">
			<h2 class="post-title"><?php $this->title() ?></h2>
			<div class="links">
				<?php Links_Plugin::output("
				<li>
					<a href='{url}' target='_blank'>
						<img src='{image}' alt='{name}'/>
						<h3>{name}</h3>
						<p>{description}</p>
					</a>
				</li>
				", 0); ?>
			</div>
		</div>
	</div>
<?php $this -> need('footer.php'); ?>