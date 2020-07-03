<?php
include_once ROOT.'/models/Apanel.php';
include_once ROOT.'/models/Home.php';

class ApanelController{
    public function actionIndex(){
        session_start();
        if (isset($_SESSION['admin'])){
            $all_news = Apanel::getNewsData();
            if (isset($_POST['deletenews'])):
                $id_news = $_POST['deletenews'];
                $result = Apanel::deleteNews($id_news);
                if ($result == true):
                    echo "Good";
                    exit();
                endif;
            endif;
            require_once(ROOT.'/views/admin/apanel.php');
            return true;
        }
        else{
            header("Location: /admin");
        }
    }
    public function actionLogout(){
        session_start();
        unset($_SESSION['admin']);
        unset($_SESSION['login']);
        header("Location: /");
    }
    public function actionCreate(){
        $full_data = '';
        session_start();
        if (isset($_SESSION['admin'])){
            if (isset($_POST['title'])){
                $title = $_POST['title'];
                $date = str_replace('.','-',date_format(date_create($_POST['date']), 'Y-m-d'));
                $announce = $_POST['announce'];
                $text = $_POST['text'];
                $img = $_POST['img'];
                Apanel::insertData($title,$date,$announce,$text,$img);
                header("Location: /apanel");
            }
            require_once(ROOT.'/views/admin/create.php');
        }
        else{
                header("Location: /admin");
            }
    }
    public function actionEdit($id_news){
        session_start();
        if (isset($_SESSION['admin'])){
        $full_data = Home::SelectFullNews($id_news);
        if (isset($_POST['title']) && $id_news){
            $title = $_POST['title'];
            $date_news = $_POST['date'];
            $announce = $_POST['announce'];
            $text = $_POST['text'];
            $img = $_POST['img'];
            Apanel::updateNews($id_news,$title,$date_news,$announce,$text,$img);
            header("Location: /apanel");
        }
        require_once(ROOT.'/views/admin/create.php');
    }
    }
}