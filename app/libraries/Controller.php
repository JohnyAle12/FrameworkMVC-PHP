<?php

	/*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | Este archivo se encarga de conectar los modelos y las vistas. 
    | 
    | 
    */

    class Controller{

    	//cargar modelo
    	public function model($model){
    		require_once '../app/models/'.$model.'.php';
    		return new $model();
    	}

    	//cargar vista
    	public function view($view, $data=[]){

    		if(file_exists('../app/views/'.$view.'.php')){
    			require_once '../app/views/'.$view.'.php';
    		}else{
    			die('La vista '.$view.' no existe');
    		}
    		
    	}
    }