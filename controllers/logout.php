<?php
	class Logout
	{
		public function cerrar()
		{
			session_start();
			session_unset();
			session_destroy();
			setcookie ("ruc", "", time () - 604800);
			setcookie ("usuario", "", time () - 604800);
			setcookie ("contrasena", "", time () - 604800);
			$arrResponse = array('status' => true, 'msg' => 'Sesion Cerrada');

			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

		}

	}
 ?>