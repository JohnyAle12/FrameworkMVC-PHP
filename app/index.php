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
    require_once 'controllers/Controller.php';
    require_once 'config/Base.php';

	// funcion autoload, carga todas las librerias existentes en boot
	spl_autoload_register(function($nameClass){
		require_once 'boot/'.$nameClass.'.php';
	});


    if(APP_DEBUG=='true'){
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
    }

