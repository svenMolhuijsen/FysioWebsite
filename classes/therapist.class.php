<?php
	class Therapist
	{
		private $firstName;
		private $lastName;
		private $practiceName;
		private $practiceAddress;
		private $practiceZipCode;
		private $practicePhoneNumber;

		public function __construct($firstName, $lastName, $practiceName, $practiceAddress, $practiceZipCode, $practicePhoneNumber)
		{
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->practiceName = $practiceName;
			$this->practiceAddress = $practiceAddress;
			$this->practiceZipCode = $practiceZipCode;
			$this->practicePhoneNumber = $practicePhoneNumber;
		}

		// Getters
		public function getFirstName() { return $this->firstName; }
		public function getLastName() { return $this->lastName; }
		public function getPracticeName() { return $this->practiceName; }
		public function getPracticeAddress() { return $this->practiceAddress; }
		public function getPracticeZipCode() { return $this->practiceZipCode; }
		public function getPracticePhoneNumber() { return $this->practicePhoneNumber; }

		// Setters
		public function setFirstName($firstName) { $this->firstName = $firstName; }
		public function setLastName($lastName) { $this->lastName = $lastName; }
		public function setPracticeName($practiceName) { $this->practiceName = $practiceName; }
		public function setPracticeAddress($practiceAddress) { $this->practiceAddress = $practiceAddress; }
		public function setPracticeZipCode($practiceZipCode) { $this->practiceZipCode = $practiceZipCode; }
		public function setPracticePhoneNumber($practicePhoneNumber) { $this->practicePhoneNumber = $practicePhoneNumber; }
	}
?>
