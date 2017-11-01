<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>Document</title>


</head>

<body>

	<nav>
        <ul>
            <li><a href="/views/about.view.php">About</a></li>
            <li><a href="/views/contact.view.php">Contact</a></li>

        </ul>
    </nav>

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