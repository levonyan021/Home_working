<?php
    require './../database/Database.php';

    class Author {
        protected $pdo;
        protected $response = [];
        public function __construct()
        {
            $db = new Database();
            $this->pdo = $db->connect();
        }

        public function index() {
            $sql = "SELECT * FROM `authors`";
            $query = $this->pdo->prepare($sql);
            $query->execute();

            if($query) {
                $this->response = [
                    'message' => 'All authors',
                    'countAuthors' => $query->rowCount(),
                    'data' => $query->fetchAll()
                ];
                return json_encode($this->response);
            }
        }

        public function store() {

        }

        public function update() {

        }

        public function delete() {

        }
    }