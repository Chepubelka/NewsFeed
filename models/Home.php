<?php

class Home{
    public static function SelectNews($page){
        $db = Db::get_instance();
        $result = $db->get_news($page);
        if ($result){
            return $result;
        }
        else false;
    }
    public static function CountPages(){
        $db = Db::get_instance();
        $result = $db->get_pages();
//        print_r($result);
        if ($result){
            $count = ceil($result['count_pages'] / 5);
//            print_r($count);
            return $count;
        }
        else false;
    }
    public static function SelectFullNews($id_news){
        $db = Db::get_instance();
        $result = $db->get_full_news($id_news);
        if ($result){
            return $result;
        }
        else false;
    }
}

?>