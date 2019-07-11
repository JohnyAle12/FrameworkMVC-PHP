<?php

	class InicioController extends Controller{

		public function __construct(){
			$this->cinemaModel=$this->model('Cinema');
			//echo 'controlaador inicio';
		}

		public function index(){
			echo 'Welcome !';
			$cinemas= $this->cinemaModel->getCinema();
			$data=[
				'titulo'=>'Welcome', 
				'contenido'=>'este es el contenido de la data',
				'cinemas' => $cinemas
			];
			$this->view('index', $data);
		}
	}