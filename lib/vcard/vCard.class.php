<?php

class VCard
{
	var $vcard;

	function __constructor()
	{


	}

	public function add(){


		print_r($this->vcard);
	}

	public function search(){
		echo "lista card";
	}

	public function del(){
		echo "<br>deleta card<br>";
		print_r($this->vcard);
	}

	public function edit(){
		echo "edita card";
	}

}
