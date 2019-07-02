<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
		$this->load->helper("cookie");
    }

	/**
	 * Index Page for this controller.
	 * @param int $id: id del vehiculo encriptado para el hauling
	 */
	public function index()
	{
			$this->session->sess_destroy();
			$this->load->view('login');
	}
	
	public function validateUser()
	{
			$login = $this->security->xss_clean($this->input->post("inputLogin"));
			$passwd = $this->security->xss_clean($this->input->post("inputPassword"));
			
					$arrParam = array(
						"login" => $login,
						"passwd" => $passwd
					);
					$user = $this->login_model->validateLogin($arrParam); //brings user information from user table
					
					if (($user["valid"] == true)) {
						$sessionData = array(
							"auth" => "OK",
							"id" => $user["id"],
							"firstname" => $user["firstname"],
							"lastname" => $user["lastname"],
							"name" => $user["firstname"] . ' ' . $user["lastname"],
							"logUser" => $user["logUser"],
							"state" => $user["state"],
							"rol" => $user["rol"],
							"photo" => $user["photo"]
						);
						$this->session->set_userdata($sessionData);
						//cookies
						set_cookie('user',$login, '350000'); 
						set_cookie('password',$passwd,'350000'); 
						
						$this->login_model->redireccionarUsuario();
					}else{					
						$data["msj"] = "Revisar su contraseña.";
						$this->session->sess_destroy();
						$this->load->view('login', $data);
					}
	}
	
	
}
