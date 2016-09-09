<!DOCTYPE html>
<html>
<head>
	<title>PHP practicing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-8 col-md-offset-2">				
	<ul class="list-group">
		<?php foreach ($tasks as $task) : ?>
			<li class="list-group-item">
				<h3 class="text-center"><?= $task->title ?></h3>
				<p><?= $task->text ?></p>
			</li>
		<?php endforeach; ?>
	</ul>
</div>	
</body>
</html>