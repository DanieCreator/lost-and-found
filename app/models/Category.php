<?php

class Category
{
    private $db = null;

    public function __construct(){

        $this->db = new Database;

    }

    public function add(array $data){

        $sql = "INSERT INTO categories(`name`) VALUES(:name)";

        $this->db->query($sql);
        $this->db->bindParam(':name', $data['name']);

        return $this->db->execute();

    }

    public function getAll(){

        $sql = "SELECT * FROM categories";
        $this->db->query($sql);
        return $this->db->resultSet();

    }
}