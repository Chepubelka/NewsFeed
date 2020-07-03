<?php
return array(
//    'error' => '/error/index',
    'apanel'=>'apanel/index',
    'logout'=>'apanel/logout',
    'create'=>'apanel/create',
    'edit/([0-9]+)'=>'apanel/edit/$1',
    'admin'=>'admin/index',
    'home/([0-9]+)'=>'home/main/$1',
    'news/([0-9]+)' =>'home/news/$1'
);


?>