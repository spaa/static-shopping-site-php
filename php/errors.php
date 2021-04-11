<?php if(count($errors) > 0): ?>
	<div class="errorlist">
		<?php foreach ($errors as $error): ?> 
			<p><?php echo "<strong>Wrong Credential!</strong> $error"; ?></p>
        <?php endforeach ?>
	</div>
<?php endif ?>