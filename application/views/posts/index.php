<h2><?=$title?></h2>
<?php foreach ($posts as $post): ?>
        <h4><?=$post['post_title']?></h4>
        <h5 class="text-secondary ml-2"><?=$post['post_text']?></h5>
        <hr/>
<?php endforeach; ?>