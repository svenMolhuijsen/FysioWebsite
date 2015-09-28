<?php
	class Answer
	{
		private $therapist;
		private $title;
		private $text;
		
		public function __construct($therapist, $title, $text)
		{
			$this->therapist = $therapist;
			$this->title = $title;
			$this->text = $text;
		}
		
		// Getters
		public function getTherapist() { return $this->therapist; }
		public function getTitle() { return $this->title; }
		public function getText() { return $this->text; }
		
		// Setters
		public function setTherapist($therapist) { $this->therapist = $therapist; }
		public function setTitle($title) { $this->title = $title; }
		public function setText($text) { $this->text = $text; }
	}
?>
