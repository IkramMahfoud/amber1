<?php

class Gallery
{
    public $itemDB;
    public function __construct()
    {
        $this->itemDB = new Database;
    }

    // _________________ method____________________
    public function getAll()
    {
        $this->itemDB->query("SELECT * FROM item");
        $this->itemDB->execute();
        return $rows = $this->itemDB->fetchall();
    }
}