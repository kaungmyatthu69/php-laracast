<?php

$config = require 'config.php';
$db = new Database($config['database']);
$heading='Notes  ';

$notes = $db->query('SELECT * FROM notes where user_id =4')->findAll();
require 'views/notes.view.php'
?>