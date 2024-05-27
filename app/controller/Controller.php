<?php
abstract class Controller
{
    public static function view($view,$data=[]){
     
        if (file_exists('../app/view/' . $view . '.php')) {
            require_once '../app/view/' . $view . '.php';
        } else {
            echo "<div >sorry $view.php not found</div>";
        }
    }
    public static function model($model){
        if (file_exists('../app/model/' . $model . '.php')) {
            require_once '../app/model/' . $model . '.php';
            return new $model;
        } else {
            echo "<div >sorry $model.php not found</div>";
        }
    }
}

?>