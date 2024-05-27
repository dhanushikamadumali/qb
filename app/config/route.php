

<?php 
class route{

  //default controller,method, parames

  public $controller = "LoginController";
  public $method     = "index";
  public $params     =  [];
  
  public function __construct(){
     $url = $this->url();

     if(!empty($url)){
        if(file_exists("../app/controller/". $url[0].".php")){
          $this->controller = $url[0];
          unset($url[0]);
          
        }else{
          echo "<div >sorry ".$url[0].".php not found</div>";
        }
        
     }
    
     require_once "../app/controller/".$this->controller.".php";
     $this->controller = new $this->controller;

     if(isset($url[1]) && !empty($url[1])){
        if(method_exists($this->controller,$url[1])){
            $this->method =$url[1];
            unset($url[1]);
        }else{
          echo "<div >sorry method ".$url[1].".php not found</div>";
        }
     }

     if(isset($url)){
      $this->params = $url;
      
     }else{
      $this->params = [];
     }
     call_user_func_array([$this->controller,$this->method],$this->params);

     
    
       
    
  }

  public function url(){
    if(isset($_GET['url'])){
      $url = rtrim($_GET['url']);
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url= explode("/",$url);
      return $url;

            
    }else{
      return null;
    }
  }
  
}
new route();
?>

