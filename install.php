<?php
// Подключение к MySQL
$servername = "localhost"; // локалхост
$username = "root"; // имя пользователя
$password = "1245"; // пароль если существует
$dbname = "testDB";

// Создание соединения
$conn = new mysqli($servername, $username, $password);
// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Созданние базы данных
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "<p>База данных создана успешно</p>";
} else {
    echo "Ошибка создания базы данных: " . $conn->error;
}
$conn->close();
?>
<?php
$link = mysqli_connect($servername, $username, $password, $dbname);
$query = "Create table news(id_news int NOT NULL AUTO_INCREMENT PRIMARY KEY, title varchar(30),date_news date, announce varchar(30),text text,img varchar(50))";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "<p>Создание таблицы news прошло успешно</p>";
    $query = "Create table users(id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY, login varchar(30), password varchar(100))";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result) {
        $password = '$2y$10$yMCE3LiTqqyhCSiW8rc6ju1XqHGGYo8xoZePS3UuF4Ed7vqH6eeZW';
        echo "<p>Создание таблицы users прошло успешно</p>";
        $query = "Insert into users(login,password) values('admin','$password')";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if($result) {
            echo "<p>Талица users заполнена</p>";
            $query = "Insert into news(title,date_news,announce,text,img) values('Новость 1','2020-06-27','Описание новости 1','Полный текст новости 1','/public/img/img.jpg'),('Новость 2','2020-06-26','Описание новости 2','Полный текст новости 2','/public/img/img.jpg'),('Новость 3','2020-06-22','Описание новости 3','Полный текст новости 3','/public/img/img.jpg'),('Новость 4','2020-06-25','Описание новости 4','Полный текст новости 4','/public/img/img.jpg'),('Новость 5','2020-06-20','Описание новости 5','Полный текст новости 5','/public/img/img.jpg'),('Новость 6','2020-06-15','Описание новости 6','Полный текст новости 6','/public/img/img.jpg'),('Новость 7','2020-06-13','Описание новости 7','Полный текст новости 7','/public/img/img.jpg')";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            if($result) {
                echo "<p>Таблица news успешно заполнена</p>";
            }
        }

    }
}

mysqli_close($link);
?>