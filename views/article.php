<?php

include "head.php";

?>
<div class="jumbotron">
	<div class="container">

		<img src="../img/<?php echo $v[0]['img']; ?>" class="img-responsive img-rounded" alt="Image">

		<h1><?php echo $v[0]['title']; ?></h1>

		<p class="lead"><?php echo $v[0]['text']; ?></p>

		<h6>Postat av: <?php echo $v[0]['username']." och publicerades: ".$v[0]['date'] ?><h6>

		<p><a class='btn btn-primary btn-lg' href='<?php echo $base ?>/news' role='button'>Tillbaka</a></p>
		
	</div>
</div>