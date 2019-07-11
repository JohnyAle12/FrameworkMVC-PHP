<?php

	/*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | Este archivo esta creado como el core de la aplicacion, tiene varias  
    | configuraciones relevantes a la aplicacion.
    | 
    */

    /*  Mapear la URL  ingresada en el navegador 
		1. controlador
		2. metodo
		3. parametro
    */

	class Core{
		protected $actualController='InicioController';
		protected $actualMethod='index';
		protected $actualParameter=[];

		public function __construct(){
			//print_r($this->getUrl());
			$url= $this->getUrl();

			//busca si el controlador existe
			if(file_exists('../app/controllers/'.ucwords($url[0]).'Controller.php')){
				$this->actualController=ucwords($url[0]).'Controller';
				//elimina el controlador actual para darle paso al nuevo existente
				unset($url[0]);
			}

			require_once '../app/controllers/'.$this->actualController.'.php';
			$this->actualController=new $this->actualController;

			//obtener el metodo desde la url
			if (isset($url[1])) {
				if(method_exists($this->actualController, $url[1])){
					$this->actualMethod=$url[1];
					unset($url[1]);
				}
			}

			//obtener los parametros desde la url
			$this->actualParameter=$url ? array_values($url) : [];
			// llamar callback de parametros array
			call_user_func_array([$this->actualController, $this->actualMethod], $this->actualParameter);

		}

		public function getUrl(){
			if(isset($_GET['url'])){
				$url=rtrim($_GET['url'], '/');
				$url=filter_var($url, FILTER_SANITIZE_URL);
				$url=explode('/', $url);

				return $url;
			}
		}
	}

