<?php

class Form{

	private $data; 
	public $surround = 'p';

	public function __construct($data = array()){ // = array() -> fournir un tableau vide si rien n'est passé en paramètre
		$this->data = $data;
	} 

	private function surround($html){
		return '<' . $this->surround . '>' . $html . '</' . $this->surround . '>';
	}

	private function getValue($index){
		return  isset($this->data[$index]) ? $this->data[$index] : null; // condition ternaire : si le tableau n'est pas vide, retourne ce qu'il y a après le ?, sinon on retourne null 
	}

	public function input($name){
		return $this->surround('<input type="text" name="' . $name . ' " value=" ' . $this->getValue($name) . ' "></input>');
	}

	public function submit(){
		return $this->surround('<button type="submit">Envoyer</button>');
	}

}

?>