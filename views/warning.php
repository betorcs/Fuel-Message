<?php foreach ($messages as $message): ?>
<div class="alert alert-warning">
	<a class="close" data-dismiss="alert" href="#">&times;</a>
	<p><?php echo $message; ?></p>
</div>
<?php endforeach ?>