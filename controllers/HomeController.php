<?php
include_once ROOT.'/models/Home.php';

class HomeController{
    public function actionMain($page){
        $data_news = Home::SelectNews($page);
        $count_pages = Home::CountPages();
        include_once(ROOT.'/views/main.php');
    }
    public function actionNews($id_news){
        $full_data = Home::SelectFullNews($id_news);
        include_once(ROOT . '/views/news.php');
    }

}
?>