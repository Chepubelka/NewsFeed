<?php
include_once ROOT.'/models/Admin.php';

class AdminController{

    public function actionIndex(){
        $login ='';
        $password= '';
        if (isset($_POST['submit'])){
            $login = $_POST['login'];
            $password = $_POST['password'];
            $adminId = Admin::checkAdminData($login,$password);
            if ($adminId == false){
                header("Location: /admin");
            } else
            {
                Admin::authAdmin($adminId,$login);
                header("Location: /apanel");
            }

        }
        require_once(ROOT.'/views/admin/auth.php');
        return true;
    }

}