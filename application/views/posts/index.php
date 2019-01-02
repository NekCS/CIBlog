<h2><?=$title?></h2>
<div class="list-group">
<?php foreach ($posts as $post): ?>
	<div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1"><?=$post['post_title']?></h5>
			<small><time datetime="<?=date('Y-m-d', strtotime($post['created']))?>"><?=date('j/n/Y', strtotime($post['created']))?></time></small>
		</div>
		<p class="mb-1"><?=$post['post_text']?></p>
		<small><?=$post['post_author']?></small></br>
		<a href="#" class="btn btn-primary">Edit</a>
	</div>
<?php endforeach; ?>
</div>
