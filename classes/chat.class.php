<?php
	class Chat
	{
		private $therapist;
		private $sportclub;
		private $sporter;
		private $text;
		private $sendby;
		private $urgency;
		private $time;
		private $date;
		private $picture;

		public function __construct($therapist, $sportclub, $sporter, $text, $text, $sendby, $urgency, $time, $date, $picture)
		{
			$this->therapist = $therapist;
			$this->sportclub = $sportclub;
			$this->sporter = $sporter;
			$this->text = $text;
			$this->sendby = $sendby;
			$this->urgency = $urgency;
			$this->time = $time;
			$this->date = $date;
			$this->picture = $picture;
		}

		// Getters
		public function getTherapist() { return $this->therapist; }
		public function getSportclub() { return $this->sportclub; }
		public function getSporter() { return $this->sporter; }
		public function getText() { return $this->text; }
		public function getSendBy() { return $this->sendby; }
		public function getUrgency() { return $this->urgency; }
		public function getTime() { return $this->time; }
		public function getDate() { return $this->date; }
		public function getPicture() { return $this->picture; }

		// Setters
		public function setTherapist($therapist) { $this->therapist = $therapist; }
		public function setSportclub($sportclub) { $this->sportclub = $sportclub; }
		public function setSporter($sporter) { $this->sporter = $sporter; }
		public function setText($text) { $this->text = $text; }
		public function setSendby($sendby) {$this->sendby = $sendby; }
		public function setUrgency($urgency) { $this->urgency = $urgency; }
		public function setTime($time) { $this->time = $time; }
		public function setDate($date) { $this->date = $date; }
		public function setPicture($picture) { $this->picture = $picture; }
	}
?>
