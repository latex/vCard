<?php
/***
* Manipulation files and direftories
*
***/

//namespace Files;
class Files{

	public  $filename = '';

	public function exist(){
		if (file_exists($this->filename)) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function add(){
		if ($this->exist()) {
			return FALSE;
		}
		else{
			return TRUE;
		}
	}

	public function del(){}

	public function move(){}


}
