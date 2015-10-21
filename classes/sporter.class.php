<?php
	class Sporter
	{
		private $sportclub;
		private $firstName;
		private $lastName;
		private $age;

		public function __construct($sportclub, $firstName, $lastName, $age)
		{
			$this->sportclub = $sportclub;
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->age = $age;
		}

		// Getters
		public function getSportclub() { return $this->sportclub; }
		public function getFirstName() { return $this->firstName; }
		public function getLastName() { return $this->lastName; }
		public function getAge() { return $this->age; }

		// Setters
		public function setSportclub($sportclub) { $this->sportclub = $sportclub; }
		public function setFirstName($firstName) { $this->firstName = $firstName; }
		public function setLastName($lastName) { $this->lastName = $lastName; }
		public function setAge($age) { $this->age = $age; }
	}
?>
