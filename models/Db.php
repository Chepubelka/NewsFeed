<?php

class Db{
    public $db;
    public $i = 1;

    static private $_ins = NULL;

    static public function get_instance() {
        if(self::$_ins instanceof self) {
            return self::$_ins;
        }
        return self::$_ins = new self;
    }
// Подключение к бд
    public function __construct() {
        $paramsPath = ROOT.'/config/db.php';
//         $paramsPath = ROOT.'/config/db_local.php';
        $params = include($paramsPath);
//       echo "<h1>Соединение с базой данных</h1>";
        $this->db = new mysqli($params['host'],$params['user'],$params['password'],$params['dbname']);

        if($this->db->connect_error) {
            throw new DbException("Ошибка соединения : ");
        }

        $this->db->query("SET NAMES 'UTF8'");
    }

    private function __clone() {

    }
    // Авторизация
    public function login($login,$password){
        $sql = "SELECT * from users Where login='$login'";
        $pass = $this->db->query($sql);
        $completepass = $pass->fetch_assoc();
        $result = password_verify($password,$completepass['password']);
        if ($result == true) {
            return $completepass;
        }
        return false;
    }
//    Выводит новости для каждой страницы
    public function get_news($page){
        $limit = 5;
        $offset = $limit * ($page - 1);
        $sql = "SELECT * from news ORDER BY date_news DESC LIMIT $limit OFFSET $offset";
        $news = $this->db->query($sql);
        for($i = 0; $i < $news->num_rows; $i++) {
            $result[] = $news->fetch_assoc();
        }
        return $result;
    }
//    Возвращает все новости
    public function get_all_news(){
        $sql = "SELECT * from news ORDER BY date_news DESC";
        $news = $this->db->query($sql);
        for($i = 0; $i < $news->num_rows; $i++) {
            $result[] = $news->fetch_assoc();
        }
        return $result;
    }
//    Подсчет всех записей для определения количества страниц в пагинации
    public function get_pages(){
        $sql = "Select COUNT(*) as count_pages from news";
        $count = $this->db->query($sql);
        $result = $count->fetch_assoc();
        return $result;
    }
//    Добавление новой новости
    public function insert_data($title,$date,$announce,$text,$img){
        $query = "Insert into news(title,date_news,announce,text,img) values ('$title','$date','$announce','$text','$img')";
        $result = $this->db->query($query);
        return true;
    }
//    Возвращает всю информацию об одной новости
    public function get_full_news($id_news){
        $sql = "SELECT * from news WHERE id_news = '$id_news'";
        $news = $this->db->query($sql);
            $result = $news->fetch_assoc();
        return $result;
    }
    public function delete($id,$table){
        $query = "Delete from $table where id_news = '$id'";
        $result = $this->db->query($query);
        return true;
    }
    public function update_news($id_news,$title,$date_news,$announce,$text,$img){
        $query = "Update news set title ='$title', date_news = '$date_news', announce = '$announce', text = '$text', img = '$img' where id_news = '$id_news'";
        $result = $this->db->query($query);
        return true;
    }
}

?>