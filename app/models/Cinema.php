<?php

	class Cinema{
		private $db;

		public function __construct(){
			$this->db= new Base;
		}

		public function getCinema(){
			$this->db->query("SELECT * FROM users");
			return $this->db->registers();
		}
	}