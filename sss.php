public function validarcredenciales()
	{
		if ($_POST) {
			try {


				$usuario = $_POST['usuario'];
				$password = $_POST['password'];
				$recordarme = isset($_POST['recordarme']) ? true : false;

				//validamos el captcha
				$ip = $_SERVER['REMOTE_ADDR'];
				$captcha = $_POST['g-recaptcha-response'];
				$secret = "6LfQkbQoAAAAAIGZrDPG66QxG-m45zKgUAJyT4Ic";

				$correct = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
				$atr = json_decode($correct, TRUE);

				if (empty($usuario) && empty($password)) {
					$arrResponse = array('status' => false, 'msg' => 'Campos vacíos', 'type' => 'warning');
				} else if (empty($usuario) || empty($password)) {
					$arrResponse = array('status' => false, 'msg' => 'Campo vacío', 'type' => 'warning');
				} else if ($atr['success']) {
					$arrResponse = array('status' => false, 'msg' => 'Seleccione el Captcha', 'type' => 'warning');
				} else {
					$requestLog = $this->model->validateCredentials($usuario, $password);

					if ($requestLog) {
						$_SESSION['login'] = true;
						$_SESSION['Usuario'] = $requestLog;
						//creamos las cookis
						if ($recordarme) {
							setcookie("usuario", $requestLog['Usuario'], time() + 604800);
							setcookie("contrasena", $password, time() + 604800);
						}
						$arrResponse = array('status' => true, 'msg' => 'Es correcto las credenciales', 'type' => 'success');
					} else if ($requestLog == 'exist') {
						$arrResponse = array('status' => false, 'msg' => 'Credenciales incorrectas', 'type' => 'error');
					}
				}



			} catch (Exception $e) {
				$arrResponse = array('status' => false, 'msg' => 'Ocurrió un error: ' . $e->getMessage(), 'type' => 'error');
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}

		die();
	}