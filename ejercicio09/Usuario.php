<?php
/**
*Clase App
*/
require_once 'Usuario.php';
Class App
{
		private $_usuario;
		function __construct()
		{
			//echo 'En App';
			if(isset($ GET) && !empty($_GET)){
				$this->usuario = nex Usuarios($_GET['nombre'], $_GET['telefono']);
				//echo "$this->usuario"
			}
		}
}
