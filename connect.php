<?php
echo "hello";
try {
    $dbh = new PDO('mysql:host=first-mysql;port=3306;dbname=shop_smarty', 'root', 'test');
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
?>

