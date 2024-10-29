<?php
require 'Validator.php';
$heading='Create new note';
$config = require 'config.php';
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors=[];

    if(!Validator::string($_POST['body'],1,1000)){
        $errors['body']='Body  no more than 1000 is  required';
    }
  
    if(empty($errors)){
        $db = new Database($config['database']);
        $db->query("INSERT INTO notes (user_id, body) VALUES (:user_id, :body)", [
            'user_id' => 4,
            'body' => $_POST['body']
        ]);
    }
};

require "views/note-create.view.php";