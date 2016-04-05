<?php

require_once('db.inc.php');

$con = mysqli_connect(DB_HOST,DB_ADMIN,DB_PWD,DB_NAME);

if ($con) {
//    if (mysql_query('CREATE DATABASE IF NOT EXISTS ' . DB_NAME . ' DEFAULT CHARSET utf8 COLLATE utf8_general_ci;', $con)){
//        mysql_select_db(DB_NAME);
        $table_create_sql = 'CREATE TABLE IF NOT EXISTS ' . DB_TB_PRE . 'email_subs(
        `id` int NOT NULL AUTO_INCREMENT,
        `user_email` varchar(50) NOT NULL,
        PRIMARY KEY (`id`)
        )ENGINE=InnoDB DEFAULT CHARSET utf8 COLLATE utf8_general_ci;';
        
        mysqli_query($con, $table_create_sql);
        
        $table_create_sql = 'CREATE TABLE IF NOT EXISTS ' . DB_TB_PRE . 'likes(
        `id` int NOT NULL,
        `likes_num` int NOT NULL,
        PRIMARY KEY (`id`)
        )ENGINE=InnoDB DEFAULT CHARSET utf8 COLLATE utf8_general_ci;';
        
        mysqli_query($con, $table_create_sql);
        $sql = 'INSERT INTO ' . DB_TB_PRE . 'likes (`id`,`likes_num`) VALUES (1,0)';
        mysqli_query($con, $sql);
        echo '成功啦！';
//    } else { die('<p>数据库创建失败. <br>Error: ' . mysql_error() . '</p>'); }
} else {
    die('<p>数据库连接时出错啦！<br>Error: ' . mysql_error() . '</p>');
}

