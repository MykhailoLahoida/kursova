<?php

	class Graduates extends Student{
		private $dates;

		public function __construct($surname, $name, $subject, $dates){
			parent::__construct($surname, $name, $subject);
			$this->dates = $dates;
		}
		public function getDates(){
			return $this->dates;
		}
	}
?>