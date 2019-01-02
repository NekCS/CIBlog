<h2><?php echo $title; ?></h2>

<?php 
	echo validation_errors(); 
	$attributes = array('id' => 'addform');
?>

<?php echo form_open('posts/add', $attributes); ?>
	<div class="form-group">
	    <label for="post-title">Title</label>
	    <input class="form-control" id="post-title" name="post-title" />
	</div>
	<div class="form-group">
	    <label for="post-text">Text</label>
	    <textarea class="form-control"  id="post-text" name="post-text"></textarea>
	</div>
	<div class="form-group">
		<label for="post-author">Example select</label>
		<select class="form-control" id="post-author" name="post-author">
			<option value="Nektarios Liakis">Nektarios Liakis</option>
			<option value="nekdev" selected>nekdev</option>
		</select>
	</div>
    <input type="submit" name="submit" value="Add Post"  class="btn btn-dark"/>
</form>
