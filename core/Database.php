<?php
namespace database;
class Database
{
    private function Connect_db()
    {
        return $connection_database = new \mysqli("localhost", "root", "", "cpsaccounts");
    }


    public function Query($sql)
    {
        $db = $this->Connect_db();
        return $db->query($sql);
    }


}