<?php


class Apanel{
    public static function getNewsData(){
        $db = Db::get_instance();
        $result = $db->get_all_news();
        if ($result){
            return $result;
        }
        return false;
    }
    public static function insertData($title,$date,$announce,$text,$img){
        $db = Db::get_instance();
        $result = $db->insert_data($title,$date,$announce,$text,$img);
        if ($result == true){
            return $result;
        }else
            false;
    }
    public  static  function  deleteNews($id){
        $table = 'news';
        $db = Db::get_instance();
        $deleteuser = $db->delete($id,$table);
    }
    public static function updateNews($id_news,$title,$date_news,$announce,$text,$img){
        $db = Db::get_instance();
        $updatenews = $db->update_news($id_news,$title,$date_news,$announce,$text,$img);
    }
}