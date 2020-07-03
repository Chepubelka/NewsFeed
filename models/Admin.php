<?php

class Admin{
    public static function checkAdminData($login,$password){
        $db =  Db::get_instance();
        $result = $db->login($login,$password);
        if ($result){
            return $result['id_user'];
        }
        return false;
    }
    public static function authAdmin($adminId,$login){
        session_start();
        $_SESSION['admin']=$adminId;
        session_start();
        $_SESSION['login']=$login;
    }
}


?>