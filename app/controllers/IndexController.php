<?php

	class IndexController extends Controller{

		private $customerModel;

		public function index(){
			$this->view('welcome');
		}

	}