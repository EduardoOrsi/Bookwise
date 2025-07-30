<?php

$data = new DB();

$books = $data->books();

view("index", ['books' => $books]);
