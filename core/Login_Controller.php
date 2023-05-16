<?php

namespace database;

class Login_Controller extends Database
{
    private $username;
    private $password;

    public static function Login()
    {
        if (!empty($_POST['login']))
        {
            return "aaaah";
        }
    }

    public function Logout()
    {

    }

    private function Is_logged_in()
    {

    }

}
