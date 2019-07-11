<?php

	/*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | Este archivo esta creado para la configuracion de conexion de
    | la base de datos, tomando credenciales del archivo config.php
    | 
    */

    class Base{
    	private $host=DB_HOST;
    	private $user=DB_USER;
    	private $password=DB_PASSWORD;
    	private $namedb=DB_NAME;

    	// data base handler
    	private $dbh;
    	private $stmt;
    	private $error;

    	public function __construct(){
    		$dsn= 'mysql:host='.$this->host.';dbname='.$this->namedb;
    		$options= array(
    			PDO::ATTR_PERSISTENT => true,
    			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    		);

    		//crear instancia de PDO
    		try{
    			$this->dbh= new PDO($dsn, $this->user, $this->password, $options);
    			//conexion con caracteres especiales
    			$this->dbh->exec('set names utf8');
    		}catch(PDOException $e){
    			$this->error = $e->getMessage();
    			echo $this->error;
    		}
    	}

    	//preparamos la consulta
    	public function query($sql){
    		$this->stmt= $this->dbh->prepare($sql);
    	}

    	// vinculamos la consulta con bind
    	public function bind($parameter, $value, $type = null){
    		if(is_null($type)){
    			switch (true) {
    				case is_int($value):
    					$type= PDO::PARAM_INT;
    				break;
    				case is_bool($value):
    					$type= PDO::PARAM_BOOL;
    				break;
    				case is_null($value):
    					$type= PDO::PARAM_NULL;
    				break;
    				default:
    					$type= PDO::PARAM_STR;
    				break;
    			}
    		}

    		$this->stmt->bindValue($parameter, $value, $type);
    	}

    	// ejecutamos la consulta
    	public function execute(){
    		return $this->stmt->execute();
    	}

    	//obtener los registros
    	public function registers(){
    		$this->execute();
    		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    	}

    	//obtener solo un registro
    	public function register(){
    		$this->execute();
    		return $this->stmt->fetch(PDO::FETCH_OBJ);
    	}

    	//obtener cantidad de registros con rowCount
    	public function rowCount(){
    		return $this->stmt->rowCount();
    	}
    }