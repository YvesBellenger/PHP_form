<?php

	require 'form.php';
	require 'text.php';

	$form = new Form($_POST);
	var_dump(Text::withZero(4)); // façon d'appeler une méthode static, méthode static permet de ne pas avoir à créer d'instance
								 // une méthode static est donc une méthode qui appartient à la classe (existe aussi variables static)

?>

<form action="#" method="post">

<?php

	echo $form->input('username');
	echo $form->input('password');
	echo $form->submit();

?>

</form>