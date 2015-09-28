<?php
	class Sportclub
	{
		private $therapist;
		private $name;
		private $address;
		private $zipCode;
		private $phoneNumber;
		private $mail;
		private $contactPerson;
		
		public function __construct($therapist, $name, $address, $zipCode, $phoneNumber, $mail, $contactPerson)
		{
			$this->therapist = $therapist;
			$this->name = $name;
			$this->address = $address;
			$this->zipCode = $zipCode;
			$this->phoneNumber = $phoneNumber;
			$this->mail = $mail;
			$this->contactPerson = $contactPerson;
		}
		
		// Getters
		public function getTherapist() { return $this->therapist; }
		public function getName() { return $this->name; }
		public function getAddress() { return $this->address; }
		public function getZipCode() { return $this->zipCode; }
		public function getPhoneNumber() { return $this->phoneNumber; }
		public function getMail() { return $this->mail; }
		public function getContactPerson() { return $this->contactPerson; }
		
		// Setters
		public function setTherapist($therapist) { $this->therapist = $therapist; }
		public function setName($name) { $this->name = $name; }
		public function setAddress($address) { $this->address = $address; }
		public function setZipCode($zipCode) { $this->zipCode = $zipCode; }
		public function setPhoneNumber($phoneNumber) { $this->phoneNumber = $phoneNumber; }
		public function setMail($mail) { $this->mail = $mail; }
		public function setContactPerson($contactPerson) { $this->contactPerson = $contactPerson; }
	}
?>
