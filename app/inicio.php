<?php

	/*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | Este archivo esta creado como la conexion entre app y public 
    | se hace uso de todos los componentes de app
    | 
    */

    /*require_once 'libraries/Base.php';
	require_once 'libraries/Controller.php';
	require_once 'libraries/Core.php';*/
	require_once 'config/config.php';

	// funcion autoload, carga todas las librerias existentes
	spl_autoload_register(function($nameClass){
		require_once 'libraries/'.$nameClass.'.php';
	});