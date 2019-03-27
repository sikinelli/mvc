<?php   

class Login extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
        Session::checkSession2(); 
    } 



    public function login(){            
        
        $this->load->view("login/login");
        
        
    }

    // Autorizacija korisnika
    public function loginAuth(){

        $users_table = 'users';

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $userModel = $this->load->model('UserModel');
        $count = $userModel->userControl($users_table, $username, $password);  
        
        if($count > 0){ 

            $result = $userModel->getUserData($users_table, $username, $password);
            Session::init(); 
            Session::set("login", true); 
            Session::set("username", $result[0]['username']); 
            Session::set("user_id", $result[0]['user_id']);
            header("Location:" .BASE_URL."/Admin"); 
        } else {
            header("Location:" .BASE_URL);
        }
        	
    }

  
    public function logout() {
        Session::init();
        Session::destroy(); 
        header("Location:" .BASE_URL);
    }

} 