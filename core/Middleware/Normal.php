<?php
namespace core\Middleware ;
class Normal {
    public function handle(){
        if(($_SESSION['user']['type'] != "normal") ?? false){
            header('location:/');
            exit();
        }
    }

}