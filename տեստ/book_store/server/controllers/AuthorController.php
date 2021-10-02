<?php
    require './../models/Author.php';
    $action = '';
    if(isset($_POST['action'])) {
        $action = $_POST['action'];
    } else {
        die;
    }
    if($action === 'all-authors') {
        $authors = new Author();
        echo $authors->index();
    }