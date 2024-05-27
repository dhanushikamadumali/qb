<?php
require_once 'Controller.php';

class LoginController extends Controller{

    public function __construct()
    {
        $loginmodel = $this->model('Login');
        // Login::userLogin();
    }
    public function index(){
        $this->view('login',[]);
       
    }

    public function userLogin(){
        // var_dump($_POST);
      
        header("location:../DashboardController");
    }
}
