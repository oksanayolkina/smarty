<?php
echo "hello";
try {
    $dbh = new PDO('mysql:host=first-mysql;port=3306;dbname=shop_smarty', 'oksana', 'oksanaoksana');
    foreach($dbh->query('SELECT * FROM users', PDO::FETCH_ASSOC) as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
catch (Exception $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


//CREATE DATABASE shop_smarty;
//CREATE USER 'oksana'@'localhost' IDENTIFIED WITH mysql_native_password BY 'oksanaoksana';
//GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, INDEX, DROP, ALTER, CREATE TEMPORARY TABLES, LOCK TABLES ON shop_smarty.* TO 'oksana'@'localhost';


//CREATE TABLE `users` (
//`id` int(11) NOT NULL AUTO_INCREMENT,
//  `name` varchar(100) NOT NULL,
//  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
//  PRIMARY KEY (`id`)
//) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8