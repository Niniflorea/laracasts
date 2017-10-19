<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>Document</title>


</head>

<body>
	
</body>

	<ul>
		<?php foreach($tasks as $task) : ?>


			<?php if($task->completed) :?>

				<strike><li><?=  $task->description ?></li></strike>

			<?php else :?>		

				<li><?=  $task->description ?></li>
 
			<?php endif ;?>		

		<?php endforeach ;?>
	</ul>

</body>

</html>