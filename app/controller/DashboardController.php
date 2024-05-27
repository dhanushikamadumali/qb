<?php
require_once 'Controller.php';

class DashboardController extends Controller{

    public function __construct()
    {
        $dashboardmodel = $this->model('Dashboard');
        // Login::userLogin();
    }
    public function index(){
        $this->view('dashboard',[]);
       
    }

    // public function userLogin(){
    //     // var_dump($_POST);
    //     header("location:");
    // }
}
