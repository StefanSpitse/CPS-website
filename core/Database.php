<?php
namespace database;
class Database
{
    private function Connect_db()
    {
        return $connection_database = new \mysqli("localhost", "root", "", "cpsaccounts");
    }


    protected function Query($sql)
    {
        return $this->Connect_db()->query($sql);
    }


}