<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login_model extends CI_Model {

	    function __construct(){        
	        parent::__construct();
     
	    }
	    
	    /**
	     * Valida los datos del formulario de ingreso (login y password) contra la base de datos del aplicativo
	     * @author BMOTTAG
	     * @since  8/11/2016
	     */
	    public function validateLogin($arrData)
		{
	    	$user = array();
	    	$docente = array();
	    	$user["valid"] = false;
	 	$host = '192.168.1.10';		
	 	$domain = 'arboleda';	
	 	$ldap_base_dn = 'dc=usa,dc=loc';	
	    	$login = $arrData["login"];	
	    	$passwd =$arrData["passwd"];
		$logueado = false;   
                $ldap_connection = ldap_connect("ldap://{$host}");
                ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3);
                ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0);
                if ($bind = @ldap_bind($ldap_connection, "{$login}@{$domain}", $passwd))
		{
			$search_filter = 'samAccountName='.$login;
			$justthese = array("*");
			//$justthese = array("ou", "sn", "givenname", "wwwhomepage", "employeeid", "displayname");
        		$result = ldap_search($ldap_connection, $ldap_base_dn, $search_filter, $justthese);	
                	$entries = ldap_get_entries($ldap_connection, $result);
                        ldap_unbind($ldap_connection);
                	@ldap_close($ldap);
                        $logueado = true;
                }
                else 
		{
                        @ldap_close($ldap);
                        $logueado = false;
                }
		if ($logueado == true)
		{	
			$sql = "SELECT * FROM user WHERE log_user = '$login'";
	    		$query = $this->db->query($sql);
	    		if ($query->num_rows() > 0)
			{	    		
	    			foreach($query->result() as $row)
				{	
	    				$user["valid"] = true;
	    				$user["id"] = $row->id_user;
	    				$user["firstname"] = $row->first_name;
	    				$user["lastname"] = $row->last_name;
					$user["logUser"] = $row->log_user;
	    				$user["movil"] = $row->movil;
					$user["state"] = $row->state;
					$user["rol"] = $row->perfil;
	    			}	    			
	    		}
			else
			{
				if (FALSE !== $result)
				{
					for ($x=0; $x<$entries['count']; $x++){
					$sn = "";
                        		if (!empty($entries[$x]['sn'][0])) 
					{
                                		$sn = $entries[$x]['sn'][0];
                                		if ($sn == "NULL")
						{
                                        		$sn = "";
                                		}
                        		}
					$givenName = "";
                        		if (!empty($entries[$x]['givenname'][0])) 
					{
                                		$givenName = $entries[$x]['givenname'][0];
                                		if ($givenName == "NULL")
						{
                                        		$givenName = "";
                                		}
                        		}
					$employeeId = "";
                        		if (!empty($entries[$x]['employeeid'][0])) 
					{
                                		$employeeId = $entries[$x]['employeeid'][0];
                                		if ($employeeId == "NULL")
						{
                                        		$employeeId = "";
                                		}
                        		}
					$department = "";
                        		if (!empty($entries[$x]['department'][0])) 
					{
                                		$department = $entries[$x]['department'][0];
                                		if ($department == "NULL")
						{
                                        		$department = "";
                                		}
                        		}
					$wwwHomepage = "";
                        		if (!empty($entries[$x]['wwwhomepage'][0])) 
					{
                                		$wwwHomepage = $entries[$x]['wwwhomepage'][0];
                                		if ($wwwHomepage == "NULL")
						{
                                        		$wwwHomepage = "";
                                		}
                        		}
					}
					$sql = "SELECT * FROM docente WHERE NUMERO_DOCUMENTO = '$employeeId'";
	    				$query = $this->db->query($sql);
	    				if ($query->num_rows() > 0)
					{
			    			foreach($query->result() as $row)
						{	
	    						$docente["id_docente"] = $row->ID_DOCENTE;
						}
						$sql = "INSERT INTO user (numero_documento,movil,first_name,last_name,log_user,email,state,perfil) VALUES ('".$employeeId."','".$department."','".$givenName."','".$sn."','".$login."','".$wwwHomepage."',1,3)";
	    					$query = $this->db->query($sql);
						
						$sql = "SELECT * FROM user WHERE log_user = '$login'";
	    					$query = $this->db->query($sql);
	    					if ($query->num_rows() > 0)
						{	    		
			    				foreach($query->result() as $row)
							{	
	    							$user["valid"] = true;
				    				$user["id"] = $row->id_user;
	    							$user["firstname"] = $row->first_name;
				    				$user["lastname"] = $row->last_name;
								$user["logUser"] = $row->log_user;
				    				$user["movil"] = $row->movil;
								$user["state"] = $row->state;
								$user["rol"] = $row->perfil;
				    			}	    			
	    					}
						$sql = "INSERT INTO docente_x_user (fk_id_user,fk_id_docente) VALUES ('".$user["id"]."','".$docente["id_docente"]."');";
	    					$query = $this->db->query($sql);
					}
					else
					{
						$sql = "INSERT INTO user (numero_documento,movil,first_name,last_name,log_user,email,state,perfil) VALUES ('".$employeeId."','".$department."','".$givenName."','".$sn."','".$login."','".$wwwHomepage."',1,2)";
	    					$query = $this->db->query($sql);
						$sql = "SELECT * FROM user WHERE log_user = '$login'";
	    					$query = $this->db->query($sql);
	    					if ($query->num_rows() > 0)
						{	    		
			    				foreach($query->result() as $row)
							{	
	    							$user["valid"] = true;
				    				$user["id"] = $row->id_user;
	    							$user["firstname"] = $row->first_name;
				    				$user["lastname"] = $row->last_name;
								$user["logUser"] = $row->log_user;
				    				$user["movil"] = $row->movil;
								$user["state"] = $row->state;
								$user["rol"] = $row->perfil;
				    			}	    			
	    					}
					}
				
				}
			}
			
	    	}
			
	    	$this->db->close();	    	
	    	return $user;
	    }
		
	    /**
	     * Redirecciona el usuario al módulo correspondiente dependiendo de los datos almacenados en la session
	     * @author BMOTTAG
	     * @since  8/11/2016
		 * @review  18/12/2016
	     */
	    public function redireccionarUsuario()
		{

			$state = $this->session->userdata("state");
			$rol = $this->session->userdata("rol");
			
	    	switch($state){
	    		case 0: //NEW USER, must change the password
	    				redirect("/employee","location",301);
	    				break;
	    		case 1: //ACTIVE USER
						if($rol == 99){
							redirect("/dashboard","location",301);
						}elseif($rol == 2){
							redirect("/estudiante/buscar","location",301);
						}elseif($rol == 3){
							redirect("/docente","location",301);
						}elseif($rol == 4){
							redirect("/dashboard","location",301);
						}elseif($rol == 5){
							redirect("/dashboard","location",301);
						}
	    				break;
	    		case 2: //INACTIVE USER
	    				$this->session->sess_destroy();
	    				redirect("/login","location",301);
	    				break;
	    		default: //No sé como llegaron hasta acá, pero los devuelvo al Login.
	    				$this->session->sess_destroy();
	    				redirect("/login","location",301);
	    				break;
	    	}
	    }
	    
	
		
		
		
		
		
		
		
		
	    
	}
