<?php

	require 'form.php';

	$form = new Form(array(
			'username' => 'Yves'
		));

	echo $form->input('username');
	echo $form->input('password');
	echo $form->submit();

	$form = new Form();

	echo $form->input('aze');
	echo $form->input('aze');
	echo $form->input('aze');
	echo $form->input('aze');
	echo $form->input('aze');
	echo $form->submit();

	//var_dump($form->$donnes); ne marche pas car privée
	//die();

?>