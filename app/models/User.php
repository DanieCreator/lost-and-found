<?php

class User
{

    private $db = nul;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUser(string $email){
        
        $sql = "SELECT * FROM `users` WHERE `email` = :email";

        $this->db->query($sql);

        $this->db->bindParam(':email', $email);

        return $this->db->rowCount();
    }
}