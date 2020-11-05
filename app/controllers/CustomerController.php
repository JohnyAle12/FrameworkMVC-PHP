<?php

	class CustomerController extends Controller{

		private $customerModel;

		public function __construct(){
			$this->customerModel=$this->model('Customer');
		}

		public function index(){
			$customers= $this->customerModel->getCustomers();
			$this->view('customers/index', json_encode($customers));
		}

		public function create(){
			$this->view('customers/create');
		}

		public function store(){
			$data = [
				'name' => $_POST['name'],
				'identification_type' => $_POST['identification_type'],
				'identification_number' => $_POST['identification_number'],
				'phone_number' => $_POST['phone_number'],
				'mobile_number' => $_POST['mobile_number'],
				'born_date' => $_POST['born_date']
			];

			$this->customerModel->insertCustomer($data);
		}

		public function edit(){
			$id = $_POST['id'];
			$customer= $this->customerModel->getCustomerForId($id);
			$this->view('customers/edit', $customer);
		}

		public function destroy(){
			$id = $_POST['id'];
			$this->customerModel->delete($id);
		}

		public function update(){
			$data = [
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'identification_type' => $_POST['identification_type'],
				'identification_number' => $_POST['identification_number'],
				'phone_number' => $_POST['phone_number'],
				'mobile_number' => $_POST['mobile_number'],
				'born_date' => $_POST['born_date']
			];

			$this->customerModel->updateCustomer($data);
		}

	}