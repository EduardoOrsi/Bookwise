<?php


$id = $_REQUEST['id'];

$data = new DB();
$book = $data->book($id);

view("book", ['book' => $book]);