<?php

class Text{


	public function withZero($chiffre){
		if($chiffre < 10){
			return '0' . $chiffre;
		}else{
			return $chiffre;
		}
	}


}

?>