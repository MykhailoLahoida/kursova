<?php 

	class Student{
		private $surname;
		private $name;
		private $subject;

		public function __construct($surname, $name, $subject) {
			$this->surname = $surname;
			$this->name = $name;
			$this->subject = $subject;
		}
		public function getSurname(){
			return $this->surname;
		}
		public function getName(){
			return $this->name;
		}
		public function getSubject(){
			return $this->subject;
		}
		public function __toString(){
			try
			{
				return $this->getSurname() . " ".$this->getName() . " ".$this->getSubject() ;
			}
			catch (Exception $exception)
			{
				return '';
			}
		}
	}
?>