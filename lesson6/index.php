<?php
//PDO -> PHP Database Object
    class DB {
        protected $conn;
        public function __construct()
        {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            try {
                $this->conn = new PDO(
                    'mysql:host=localhost;dbname=edu',
                    'root',
                    '',
                    $options);
            } catch(PDOException $error) {
                echo 'Fail! ' . $error->getMessage();
            }
        }
        public function getCategories() {
//            $sql = 'SELECT * FROM `categories`';
            $sql = 'SELECT * FROM `categories` WHERE `name` LIKE "n%" ';
            $query = $this->conn->prepare($sql);
            $query->execute();
//            return json_encode($query->fetchAll());
            echo $query->rowCount();//veradarcnum e toxeri qanak@
        }

//        public function setCategories($name) {
//            $sql = "INSERT INTO  `categories` (`name`) VALUES ('$name')";
//            $query = $this->conn->prepare($sql);
//            $query->execute();
////            echo $this->conn->lastInsertId();//tpum a verjin insert exaci id-in
//            echo $query->rowCount();//veradarcnum e toxeri qanak@
//        }

        public function setCategories($name) {
            $sql = "INSERT INTO  `categories` (`name`) VALUES (?)";
            $query = $this->conn->prepare($sql);
            $query->execute([$name]);
    //            echo $this->conn->lastInsertId();//tpum a verjin insert exaci id-in
            echo $query->rowCount();//veradarcnum e toxeri qanak@
        }
    }
    $db = new DB();
//    echo $db->getCategories();
//$db->setCategories('Books');
//$db->getCategories();