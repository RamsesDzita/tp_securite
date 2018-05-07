
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminModel extends CI_Model{
	function __construct(){
   	 parent::__construct();
   	 $this->load->database();
	}
	function RecupererUsers(){// retourne la liste de tous les admins
		$query = $this->db->get('users');
		return $query;
	}
	function RecupererUser($id){
		$query = $this->db->where('id',$id)
						  ->get('users');
		return $query;
	}

	function LoginAdmin($pseudo,$password){

        $query = "SELECT * FROM administrateur WHERE login = '$pseudo'and password = '$password'";
		return $this->db->query($query);

	}
    function LoginUser($pseudo,$password){

        $query = "SELECT * FROM users WHERE login = '$pseudo'and password = '$password'";
        return $this->db->query($query);

    }
	function RecupererUserParId($id){
		$query = $this ->db->where('id_user',$id)
						   ->get('users');
		return $query;
	}

    function creerAdmin($username,$password, $num_compte, $banque, $pays, $montant){

        $data = array(
                        'id_user' => 'null',
                        'login' => $username,
                        'password'=> $password,
                        'num_compte' =>$num_compte,
                        'banque' => $banque,
                        'pays' => $pays,
                        'montant' => $montant
                );

                $this->db->insert('users', $data);
                return $this->db->affected_rows();

        
    }
    function updateUser($id, $username,$password, $num_compte, $banque, $pays, $montant){

        $data = array(
                        'login' => $username,
                        'password'=> $password,
                        'num_compte' =>$num_compte,
                        'banque' => $banque,
                        'pays' => $pays,
                        'montant' => $montant
                );

                $query = $this->db->where('id_user',$id)
                                  ->update('users',$data);
                return $query;
        
    }
    

	
}
