<?php

namespace database;

class Login_Controller extends Database
{
    private $username;
    private $password;

    public function Login()
    {
        if ($this->Is_logged_in())
        {
            return true;
        }
        return false;
    }

    public function Logout()
    {

    }

    private function Is_logged_in()
    {

    }

    public function __construct()
    {
        $username = $this->username;
        $password = $this->password;
    }
}
