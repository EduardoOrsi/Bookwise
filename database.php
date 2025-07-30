<?php
    class DB  {

      private $db;

      public function __construct() {
        $this->db = new PDO("sqlite:database.sqlite");
      }

    public function books($search = null) {

      $sql = "SELECT * FROM books";
      if(!is_null($search)) {
        $sql .= " WHERE id = " . $search;
      }
      $query = $this->db->query($sql);
      $items = $query->fetchAll();

      return array_map(fn($item) => Book::make($item), $items);
    }

    public function book($id) {
      $sql = "SELECT * FROM books";

      if(!is_null($id)) {
        $sql .= " WHERE id = " . $id;
      }

      $query = $this->db->query($sql);
      $items = $query->fetchAll();

      return array_map(fn($item) => Book::make($item), $items)[0];
    }
  }
