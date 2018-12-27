<h2><?=$title?></h2>
<div class="list-group">
<?php foreach ($posts as $post): ?>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1"><?=$post['post_title']?></h5>
			<small><?=$post['created']?></small>
		</div>
		<p class="mb-1"><?=$post['post_text']?></p>
		<small><?=$post['author']?></small>
	</a>
<?php endforeach; ?>
</div>
