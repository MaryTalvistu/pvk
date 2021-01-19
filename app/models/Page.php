<?php


class Page
{
    private $db;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function adduser(){
        $this->db->query('INSERT INTO users SET name=:name, email=:email, status=:status');
        $this->db->bind('name', 'user1');
        $this->db->bind('email', 'user1@host.loc');
        $this->db->bind('status', 'user');
        $this->db->execute();
    }

}