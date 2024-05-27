<?php 
require_once 'Controller.php';

// require_once '../model/Login.php';
class UserController extends Controller{
    public function __construct()
    {
       $loginmodel = $this->model('Login');
    //    Login::userLogin();
    }
    public function index(){
        $this->view('login');
       
    }

    public function userMethod(){
        // $myModel = $this->model('Login');
        // // print_r($myModel);
        // if( $myModel->login()){
        //     print_r( $myModel->login());
        // }else{
        //     echo "error";
        // };

        // $myData=[
        //     'title'=>"Dfg",
        //     'body'=>"hnij"
        // ];
      
            $this->view('login');
       
      
    }



}

?>