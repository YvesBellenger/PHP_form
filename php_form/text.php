<?php

class Text{

	public static function publicWithZero($chiffre){
		return self::withZero(4); //self fait comme this mais fait référence à la classe
	}

	private static function withZero($chiffre){
		if($chiffre < 10){
			return '0' . $chiffre;
		}else{
			return $chiffre;
		}
	}


}

?>