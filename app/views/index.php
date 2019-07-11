<?php require ROUTE_APP.'/views/inc/header.php'; ?>
<?php

	echo "Hola esta es la vista index";

	echo "<br><br> el siguiente es el titulo: ".$data['titulo'];

	foreach ($data['cinemas'] as $cinema) :
?>
	<li><?=$cinema->email?></li>
<?php
	endforeach;
?>
<?php require ROUTE_APP.'/views/inc/footer.php'; ?>



	