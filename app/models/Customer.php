<?php

	class Customer{
		private $db;

		public function __construct(){
			$this->db= new Base;
		}

		public function setQuery($sql){
			$this->db->query($sql)->execute();
		}

		public function getCustomers(){
			$this->db->query("SELECT * FROM customers WHERE deleted_at IS NULL ORDER BY created_at DESC ");
			return $this->db->registers();
		}

		public function getCustomerForId($id){
			$this->db->query("SELECT * FROM customers WHERE id='$id'");
			return $this->db->register();
		}

		public function insertCustomer($data){
			//var_dump($data);
			$this->db->query("INSERT INTO customers (name, identification_type, identification_number, mobile_number, phone_number, born_date) VALUES (:name, :identification_type, :identification_number, :mobile_number, :phone_number, :born_date)", $data);

			$this->db->bind('name', $data['name']);
			$this->db->bind('identification_type', $data['identification_type']);
			$this->db->bind('identification_number', $data['identification_number']);
			$this->db->bind('mobile_number', $data['mobile_number']);
			$this->db->bind('phone_number', $data['phone_number']);
			$this->db->bind('born_date', $data['born_date']);

			$this->db->execute();
		}

		public function updateCustomer($data){
			//var_dump($data);
			$this->db->query("UPDATE customers SET name=:name, identification_type=:identification_type, identification_number=:identification_number, mobile_number=:mobile_number, phone_number=:phone_number, born_date=:born_date WHERE id=:id");

			$this->db->bind('id', $data['id']);
			$this->db->bind('name', $data['name']);
			$this->db->bind('identification_type', $data['identification_type']);
			$this->db->bind('identification_number', $data['identification_number']);
			$this->db->bind('mobile_number', $data['mobile_number']);
			$this->db->bind('phone_number', $data['phone_number']);
			$this->db->bind('born_date', $data['born_date']);

			$this->db->execute();
		}

		public function delete($id){
			$delete_date=date('Y-m-d H:i:s');
			$this->db->query("UPDATE customers SET deleted_at='$delete_date' WHERE id='$id'");
			$this->db->execute();
		}
	}




