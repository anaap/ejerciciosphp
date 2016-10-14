<?php
/**
*Clase App
*/
require_once 'Usuario.php';

Class App
{
	private $_usuario=array();
	public function __construct()
	{
		//echo 'En App';
		if(isset($_GET) && !empty($_GET))
		{
			$this->_usuario[] = new Usuario($_GET['nombre'], $_GET['telefono']);
		//echo "$this->usuario"
		}
		foreach ($_GET['usuario'] as $usuario) {
			# code...
		}
	}
}


