<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//        $pass = md5("admin");
//        echo "<script>console.log('pass : '+ $pass)</script>";
        $this->load->model("AdminModel");
        $this->form_validation->set_rules('username','Login','required');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');

        if($this->form_validation->run() == TRUE){

            $username = $_POST['username'];
            $password = $_POST['password'];

            if(isset($_POST['admin'])){
            	$admin = $_POST['admin'];
            	$query = $this->AdminModel->LoginAdmin($username,$password);

            }else{
            	$admin = 'non';
            	$query = $this->AdminModel->LoginUser($username,$password);

            }
            $nb_row = $query->num_rows();
            $user = $query->row();
            
            if($nb_row > 0){
                
//                if($user->connected!=1){
                    
                    $this->session->set_flashdata("success","You are now connected !");

                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['pseudo'] = $user->login;
                    
                    if(isset($_POST['admin'])){
		            	$_SESSION['id_admin'] = $user->id_admin;

		            }else{
		            	$_SESSION['id_user'] = $user->id_user;

		            }
                    $this->session->mark_as_temp('user_logged', 300);// 300 = 5 minutes


                    if($admin == 'oui'){
                    	redirect("administration","refresh");
                    }else{
                    	//$this->load->view('profile/user_profile');
                    	redirect("profile","refresh");
                    }
                    
//                }else{
//                    $this->session->set_flashdata("error","Un autre utilisateur est déja connecté avec ce compte ");
//                    redirect("administration","refresh");
//                }
        }else{
            $this->session->set_flashdata("error","Login or password is incorrect.");
            	redirect("authentification","refresh");
            }
        }else{
        	$this->load->view('authentification/login');
        }
	}

	public function logout(){
        $this->load->model("AdminModel");
        unset($_SESSION);
        session_destroy();
        
        
        redirect("authentification","refresh");
    }

	public function register(){

		$this->load->model("AdminModel");
        $this->form_validation->set_rules('username','Login','required');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('confirmPass','Password confirmation','required|matches[password]');

	        if($this->form_validation->run() == TRUE){
	            $username = $_POST['username'];
	            $password = $_POST['password'];
	            $num_compte = $_POST['accountNumber'];
	            $banque = $_POST['bank'];
	            $pays = $_POST['country'];
	            $montant = $_POST['amount'];


	            $result = $this->AdminModel->creerAdmin($username,$password, $num_compte, $banque, $pays, $montant);
	            
	            if($result == 1){
	                
	//                if($user->connected!=1){
	                    
	                    $this->session->set_flashdata("success","The member has been save successffully. Log in !!");

	                    redirect("authentification","refresh");
	                    
	        }else{
				$this->load->view('authentification/register');
	        }
	    }else{
				$this->load->view('authentification/register');
	    }
	}

	public function user_pass(){
		$this->load->view('authentification/user-pass');
	}

	public function getUserById(){

            $this->load->model("AdminModel");

            $current_user = $this->AdminModel->RecupererUserParId($this->session->id_user)->row();
            
            echo json_encode($current_user);
    }

    public function updateUser(){

    	$this->load->model("AdminModel");

    	$id = $username = $this->session->id_user; 
        $login = $this->input->post('login');
        $password = $this->input->post('password');
        $account = $this->input->post('account');
        $bank = $this->input->post('bank');
        $country = $this->input->post('country');
        $amount = $this->input->post('amount');

        $result = $this->AdminModel->updateUser($id, $login,$password, $account, $bank, $country, $amount);

        if($result == TRUE){
            echo 'ok';
        }else{
            echo 'pas ok';
        }
    }

}
