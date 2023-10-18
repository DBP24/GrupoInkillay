<?php 

	//Retorna la url del proyecto
	function base_url()
	{
		return BASE_URL;
	}
	function empresa()
	{
		return NAME_EMPRESA;
	}

    //Retorna la url de Assets
    function media()
    {
        return BASE_URL."/assets";
    }

    function headerAdmin($data="")
    {
        $view_header = "views/template/headerView.php";
        require_once ($view_header);
    }

    function footerAdmin($data="")
    {
        $view_footer = "views/template/footerView.php";
        require_once ($view_footer);        
    }

    function getModal(string $nameModal, $data)
    {
        $view_modal = "views/template/modals/{$nameModal}.php";
        require_once $view_modal;        
    }

     //Genera una contraseña de 10 caracteres
	function passGenerator($length = 10)
    {
        $pass = "";
        $longitudPass=$length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena=strlen($cadena);

        for($i=1; $i<=$longitudPass; $i++)
        {
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }
    
    //Genera un token
    function token()
    {   
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }

    function encryptPassword($password) {
        $options = [
            'memory_cost' => 1024,
            'time_cost'   => 2,
            'threads'     => 2,
        ];
        return password_hash($password, PASSWORD_ARGON2I, $options);
    }   

    function verifyPassword($password, $hashedPassword) {
        return password_verify($password, $hashedPassword);
    }